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
// Old
mix.browserSync('localhost:8000')
// .js('resources/js/app.js', 'public/js')
// .js('resources/js/product.js', 'public/js')
// .js('resources/js/navbar.js', 'public/js')
// // .js('resources/vendor/calender.js', 'public/js')
// .sass('resources/sass/app.scss', 'public/css')
// .sass('resources/sass/backend/style.scss','public/assets/backend/css/');
// .sass('resources/vendor/calender.scss', 'public/css');

//new
.sass('resources/sass/new/main.scss', 'public/css')
.js('resources/js/new.js', 'public/js')
.js('resources/js/sticky-nav.js', 'public/js')
.js('resources/js/new-product.js', 'public/js');
