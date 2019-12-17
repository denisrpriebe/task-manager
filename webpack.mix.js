const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/vue/vue.js', 'public/js/vue.js')
    .js('resources/js/shop/shop.js', 'public/js/shop.js')
    .react('resources/js/react/react.js', 'public/js/react.js')
    .sass('resources/sass/app.scss', 'public/css');
