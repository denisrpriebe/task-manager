<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;

class AppController extends Controller
{
    /**
     * Show the task manager application.
     *
     * @return Renderable
     */
    public function __invoke()
    {
        return view('app');
    }
}
