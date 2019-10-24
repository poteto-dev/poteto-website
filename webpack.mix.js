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

mix.sass('resources/sass/app.scss', 'public/css')
    .js('resources/js/app.js', 'public/js').extract();
mix.version();
mix.copyDirectory('resources/fonts', 'public/fonts');
mix.copy('node_modules/bootstrap/dist/js/bootstrap.js', 'public/js/bootstrap.js');
mix.copy('node_modules/jquery/dist/jquery.js', 'public/js/jquery.js');
mix.sass('resources/sass/style.scss', 'public/css');
mix.sass('resources/sass/bootstrap/bootstrap.scss', 'public/css');
