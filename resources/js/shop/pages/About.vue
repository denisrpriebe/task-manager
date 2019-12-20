<template>
    <div v-if="!isLoading">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <!-- Page title -->
                <h3 class="text-center mt-3">{{ pageByHandle.title }}</h3>

                <!-- Page body -->
                <div class="row justify-content-center mt-4">
                    <div class="col-md-8" v-html="pageByHandle.body"></div>
                </div>

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
