let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.styles([
    'resources/assets/css/theme-color/lite-blue-theme.css',
    'resources/assets/css/animate.css',
    'resources/assets/css/jquery.fancybox.css',
    'resources/assets/css/slick.css',
    'resources/assets/css/style.css',
    'resources/assets/css/bootstrap.css'
], 'public/css/custom.css');
