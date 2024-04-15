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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/var.scss', 'public/css')
    .sass('resources/sass/body.scss', 'public/css')
    .sass('resources/sass/about.scss', 'public/css')
    .sass('resources/sass/main.scss', 'public/css/main')
    .sass('resources/sass/footer.scss', 'public/css/footer')
    .sass('resources/sass/header.scss', 'public/css/header')
    .sass('resources/sass/nav.scss', 'public/css/header')
    .sass('resources/sass/form.scss', 'public/css/form')
    .sass('resources/sass/button.scss', 'public/css/button');
