<template>
    <div class="d-flex">
        <div class="flex-grow-1">
            <input type="text" class="form-control" placeholder="What do you need to do?">
        </div>
        <button class="btn btn-primary ml-2" @click="addTask">Add task</button>
    </div>
</template>

<script>
    export default {

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
