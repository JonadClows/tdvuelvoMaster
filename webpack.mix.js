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
 'resources/assets/js/smooth-scroll.js',
    'resources/assets/js/smooth-scroll.min.js',
    'resources/assets/js/smooth-scroll.polyfills.js',
    'resources/assets/js/smooth-scroll.polyfills.min.js',

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
*/
mix
    .scripts([
        'resources/js/smooth-scroll.min.js',
        'resources/js/smooth-scroll.polyfills.min.js',
        'resources/js/main.js',
        'resources/js/dev2.js',
        // 'resources/js/app.js',
    ], 'public/js/app.js')
    .sass('resources/sass/estilos2.scss',  'public/css/estilos2.css')
    .styles([
        'resources/css/app.css',
        'resources/css/estilos.css',
    ], 'public/css/app.css');
/*
mix.styles([
    'resources/css/app.css',
    'resources/css/estilos.css'
], 'public/css/all.css');*/