/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

window._ = require('lodash');

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
    window.Popper = require('popper.js').default;
    window.$ = window.jQuery = require('jquery');

    require('bootstrap');
} catch (e) {
}

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

const files = require.context('./', true, /\.vue$/i)
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

/**
 * Next, we will setup Vue Apollo to automatically work with all of our
 * Vue components.
 */

import ApolloClient from 'apollo-boost'
import VueApollo from 'vue-apollo'
import VueRouter from 'vue-router'

/**
 * Our GraphQL Apollo client and configuration related data.
 */
const apolloClient = new ApolloClient({
    uri: 'https://denis-sandbox-store.myshopify.com/api/2019-07/graphql.json',
    headers: {'X-Shopify-Storefront-Access-Token': '4d9adca137d9b053d67fd5305bbc3e5a'}
})

/**
 * Any SPA routes defined by our application.
 */
const routes = [
    {
        path: '/',
        component: require('./pages/Home').default,
    },
    {
        path: '/m-series',
        component: require('./pages/MSeries').default,
    },
    {
        path: '/x-series',
        component: require('./pages/XSeries').default,
    },
    {
        path: '/about',
        component: require('./pages/About').default,
    },
    {
        path: '/cars/:product',
        component: require('./pages/Product').default,
    }
]

const apolloProvider = new VueApollo({
    defaultClient: apolloClient,
})

const router = new VueRouter({
    mode: 'history',
    base: '/shop',
    linkActiveClass: 'is-active',
    routes
})

Vue.use(VueRouter)
Vue.use(VueApollo)

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({

    el: '#app',

    router,

    apolloProvider

});
