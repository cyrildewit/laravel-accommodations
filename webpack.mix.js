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

mix
    // Front resources
    .js('resources/js/front/app.js', 'public/js/front.app.js')
    .sass('resources/sass/front/front.scss', 'public/css/front.css')

    // // Portal resources
    // .js('resources/js/portal/app.js', 'public/js/portal.app.js')
    // .sass('resources/sass/portal/portal.scss', 'public/css/portal.css')

    // // Management resources
    // .js('resources/js/management/app.js', 'public/js/management.app.js')
    // .sass('resources/sass/management/management.scss', 'public/css/management.css')

    .version();
