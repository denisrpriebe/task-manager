<template>
    <li class="list-group-item flex-column align-items-start">
        <div class="d-flex w-100 justify-content-between mb-2">
            <div class="d-flex">

                <!-- Task checkbox -->
                <div class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" :id="`task-${todo.id}`"
                           v-model="todo.complete"
                           @change="toggleTask">
                    <label class="custom-control-label" :for="`task-${todo.id}`"></label>
                </div>

                <!-- Task text -->
                <h5 class="pb-0 task-text" :class="{'task-complete' : todo.complete}">
                    {{ todo.text }}
                </h5>

            </div>
            <small>Updated 3 days ago</small>
        </div>

        <!-- Task actions -->
        <div>
            <button type="button" class="btn btn-link text-primary btn-sm pl-0">Edit</button>
            <button type="button" class="btn btn-link text-danger btn-sm" @click="deleteTask">Delete</button>
        </div>

    </li>
</template>

<script>

    export default {

        props: {

            task: {
                type: Object,
                required: true
            }

        },

        data() {
            return {
                todo: this.task
            }
        },

        methods: {

            toggleTask() {

                console.log(`Task #${this.todo.id} toggled.`)

                this.$emit('updated')
            },

            deleteTask() {

                console.log(`Task #${this.todo.id} deleted.`)

                this.$emit('updated')
            }

        }

    }

</script>

<style scoped>

    .task-text {
        margin-top: 2px;
    }

    .task-complete {
        text-decoration: line-through;
    }

</style>
