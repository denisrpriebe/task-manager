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
                this.tasks = [
                    {
                        id: 1,
                        text: 'Complete a tech audit',
                        complete: false
                    },
                    {
                        id: 2,
                        text: 'Drink more light beer',
                        complete: true
                    },
                    {
                        id: 3,
                        text: 'Go snowboarding this year',
                        complete: false
                    },
                ]
            }

        }

    }

</script>

<style scoped>

</style>
