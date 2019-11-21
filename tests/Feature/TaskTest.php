<?php

namespace Tests\Feature;

use App\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TaskTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_shows_a_listing_of_tasks()
    {
        $taskA = factory(Task::class)->create();
        $taskB = factory(Task::class)->create();
        $taskC = factory(Task::class)->create();

        $response = $this->get('/api/tasks');

        $response->assertStatus(200);
        $response->assertJsonFragment($taskA->toArray());
        $response->assertJsonFragment($taskB->toArray());
        $response->assertJsonFragment($taskC->toArray());
    }

    /** @test */
    public function it_can_store_a_new_task_in_the_database()
    {
        $payload = ['text' => 'Lorem ipsum...'];

        $response = $this->post('/api/tasks', $payload);

        $response->assertStatus(201);
        $this->assertDatabaseHas('tasks', [
            'text' => 'Lorem ipsum...'
        ]);
    }

    /** @test */
    public function a_task_can_be_deleted()
    {
        $taskA = factory(Task::class)->create();
        $taskB = factory(Task::class)->create();

        $this->assertDatabaseHas('tasks', [
            'id' => $taskA->id,
            'text' => $taskA->text
        ]);

        $response = $this->delete('/api/tasks/' . $taskA->id);

        $response->assertStatus(200);
        $this->assertDatabaseMissing('tasks', [
            'id' => $taskA->id,
            'text' => $taskA->text
        ]);
        $this->assertDatabaseHas('tasks', [
            'id' => $taskB->id
        ]);
    }
}
