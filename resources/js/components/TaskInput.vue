<template>
    <div class="d-flex">
        <div class="flex-grow-1">
            <input v-model="task" type="text" class="form-control" placeholder="Add a task to the list...">
        </div>
        <button class="btn btn-primary ml-2" @click="addTask">Add task</button>
    </div>
</template>

<script>
    export default {

        data() {
            return {
                task: ''
            }
        },

        methods: {

            addTask() {
                //

                this.$emit('taskAdded')
            }

        }

    }
</script>

<style scoped>

</style>
