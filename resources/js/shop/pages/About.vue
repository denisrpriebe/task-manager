<template>
    <div v-if="!isLoading">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <!-- About content here -->
                <h3 class="text-center">{{ pageByHandle.title }}</h3>

                <div v-html="pageByHandle.body"></div>

            </div>
        </div>
    </div>
</template>

<script>

    import {aboutPageQuery}from '../queries/AboutPageQuery'

    export default {

        data() {
            return {
                pageByHandle: {}
            }
        },

        apollo: {

            pageByHandle: aboutPageQuery

        },

        computed: {

            isLoading() {
                return this.$apolloData.loading
            }

        }

    }
</script>

<style scoped>

</style>
