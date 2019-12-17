<template>
    <ul class="list-group mt-3">

        <!-- Display each task -->
        <task v-for="(task, key) in tasks"
              :key="key"
              :task="task"
              @updated="$emit('updated')"
        ></task>

    </ul>
</template>

<script>

    export default {

        props: {

            tasks: {
                type: Array,
                required: true
            }

        },

    }

</script>

<style scoped>

</style>
