<template>
    <div>

        <!-- Collection loading -->
        <div class="text-center mt-5" v-if="isLoading">
            <i class="fa fa-sync fa-spin text-muted loader"></i>
        </div>

        <!-- Front page product list -->
        <div v-if="!isLoading">
            <div class="row justify-content-center">
                <div class="col-md-8">

                    <!-- Collection HTML description -->
                    <div class="text-center mt-2" v-html="collectionByHandle.descriptionHtml"></div>

                    <div class="row">

                        <!-- Display each product in the collection -->
                        <product-card v-for="product in collection"
                                      :product="product.node"
                                      :key="product.node.id"
                        ></product-card>

                    </div>
                </div>
            </div>
        </div>

    </div>
</template>

<script>

    import {XSeriesProductQuery} from '../queries/XSeriesProductsQuery'

    export default {

        data() {
            return {
                collectionByHandle: {}
            }
        },

        apollo: {

            collectionByHandle: XSeriesProductQuery

        },

        computed: {

            isLoading() {
                return this.$apolloData.loading
            },

            collection() {
                return this.collectionByHandle.products.edges
            }

        }

    }
</script>

<style scoped>

    .loader {
        font-size: xx-large;
    }

</style>
