<template>
    <div>

        <!-- Car is loading -->
        <div class="text-center mt-5" v-if="isLoading">
            <i class="fa fa-sync fa-spin text-muted loader"></i>
        </div>

        <!-- Car details -->
        <div v-if="!isLoading">
            <div class="row justify-content-center">
                <div class="col-md-8">

                    <!-- Back -->
                    <a href="#" @click="$router.go(-1)">
                        <i class="fa fa-chevron-left"></i> Back
                    </a>

                    <!-- Car image -->
                    <div class="card mt-4">
                        <img class="card-img-top" :src="image" :alt="car.title">
                    </div>

                    <div class="mt-3">

                        <!-- Title, price and description -->
                        <h3 class="card-title">{{ car.title }}</h3>
                        <h5 class="card-subtitle mb-2 text-muted">
                            {{ money(car.priceRange.minVariantPrice.amount) }}
                        </h5>
                        <p class="card-text">{{ car.description }}</p>

                        <!-- Actions -->
                        <div>
                            <a href="#" class="btn btn-success">Add to cart</a>
                        </div>

                    </div>

                    <!-- Additional car info -->
                    <product-tabs></product-tabs>

                </div>
            </div>
        </div>

    </div>
</template>

<script>

    import gql from 'graphql-tag'

    export default {

        data() {
            return {
                productByHandle: {}
            }
        },

        apollo: {
            productByHandle() {
                return gql(`query {
                  productByHandle(handle: "${this.productHandle}") {
                    id
                    title
                    handle
                    description
                    priceRange {
                      minVariantPrice {
                        amount
                      }
                    }
                    images(first: 1) {
                      edges {
                        node {
                          transformedSrc
                        }
                      }
                    }
                  }
                }`)
            }
        },

        computed: {

            image() {
                return this.car.images.edges[0].node.transformedSrc
            },

            isLoading() {
                return this.$apolloData.loading
            },

            productHandle() {
                return this.$route.params.product
            },

            car() {
                return this.productByHandle
            }

        },

        methods: {

            money(money) {
                return new Intl.NumberFormat('en-US',
                    {style: 'currency', currency: 'USD'}
                ).format(money)
            }

        }

    }

</script>

<style scoped>

    .loader {
        font-size: xx-large;
    }

</style>
