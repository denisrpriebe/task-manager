<template>
    <div class="col-md-8">

        <!-- Task input -->
        <task-input @taskAdded="loadTasks"></task-input>

        <!-- Task list -->
        <task-list :tasks="tasks"
                   @updated="loadTasks"
        ></task-list>

    </div>
</template>

<script>

    export default {

        data() {
            return {
                tasks: []
            }
        },

        created() {
            this.loadTasks()
        },

        methods: {

            addTask(task) {
                //
            },

            loadTasks() {
                axios.get('/api/tasks')
                    .then(response => this.tasks = response.data)
            }

        }

    }

</script>

<style scoped>

</style>
