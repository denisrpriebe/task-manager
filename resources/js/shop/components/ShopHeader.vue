<template>
    <div class="row justify-content-center pt-4">
        <div class="col-md-8">
            <h1 class="text-center">{{ shopName }}</h1>
            <div class="text-center text-muted">(Headless Shopify Example)</div>
            <div class="d-flex justify-content-between mt-4">
                <div>
                    <router-link to="/" exact class="mr-3">All BMWs</router-link>
                    <router-link to="/m-series" exact>M Series</router-link>
                </div>
                <div>
                    <a class="text-success mr-3" href="#">My Account</a>
                    <a href="#">Cart</a>
                </div>
            </div>
            <hr>
        </div>
    </div>
</template>

<script>

    export default {

        props: {

            shopName: {
                type: String,
                required: true
            }

        }

    }

</script>

<style scoped>

    .is-active {
        text-decoration: underline;
    }

</style>
