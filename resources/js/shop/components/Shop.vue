<template>
    <div v-if="!isLoading" class="container">

        <!-- Header -->
        <shop-header :shop-name="shop.name"></shop-header>

        <!-- Page content -->
        <router-view></router-view>

        <!-- Footer -->
        <shop-footer :shop-name="shop.name"></shop-footer>

    </div>
</template>

<script>

    import {shopInfoQuery} from '../queries/ShopInfoQuery'

    export default {

        data() {
            return {
                shop: {},
                collectionByHandle: {}
            }
        },

        apollo: {

            shop: shopInfoQuery,

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
