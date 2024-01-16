let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js');
mix.sass('resources/scss/global.scss', 'public/css');
mix.sass('resources/scss/home-page.scss', 'public/css');
mix.sass('resources/scss/common.scss', 'public/css');
if (mix.inProduction()) {
    mix.version();
}
