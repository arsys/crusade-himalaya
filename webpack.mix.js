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
 mix.browserSync('localhost:8000');
// mix.js('resources/js/app.js', 'public/js');
mix.browserSync('localhost:8000')
.js('resources/js/app.js', 'public/js')
.js('resources/js/product.js', 'public/js')
.js('resources/js/navbar.js', 'public/js')
.sass('resources/sass/app.scss', 'public/css')
.sass('resources/sass/backend/style.scss','public/assets/backend/css/');