<template>
    <div class="row justify-content-center mt-3 mb-4">
        <div class="col-md-8">

            <hr class="mt-4">

            <p class="text-center text-muted mb-0">
                Copyright © {{ new Date().getFullYear() }} {{ shopName }}. All rights reserved.
            </p>

            <div class="d-flex justify-content-center">
                <router-link to="/">Home</router-link>
                <router-link class="mx-3" to="/about">About</router-link>
                <router-link to="/contact">Contact</router-link>
            </div>

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

</style>
