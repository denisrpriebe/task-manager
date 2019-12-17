<template>
    <div class="col-md-6">
        <div class="card mt-4">

            <!-- Product image -->
            <img class="card-img-top" :src="image" :alt="product.title">

            <div class="card-body">

                <!-- Title, price and description -->
                <h5 class="card-title">{{ product.title }}</h5>
                <h6 class="card-subtitle mb-2 text-muted">
                    {{ money(product.priceRange.minVariantPrice.amount) }}
                </h6>
                <p class="card-text">{{ product.description }}</p>

                <!-- Actions -->
                <div>
                    <router-link :to="`/cars/${product.handle}`" class="btn btn-primary">
                        Quick view
                    </router-link>
                    <a href="#" class="btn btn-success">Add to cart</a>
                </div>

            </div>
        </div>
    </div>
</template>

<script>
    export default {

        props: {

            product: {
                type: Object,
                required: true
            }

        },

        computed: {

            image() {
                return this.product.images.edges[0].node.transformedSrc
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

</style>
