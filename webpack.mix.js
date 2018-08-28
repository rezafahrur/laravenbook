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
    .scripts(['node_modules/datatables.net/js/jquery.dataTables.js',
        'node_modules/datatables.net-bs/js/dataTables.bootstrap.js',
        'node_modules/datatables.net-responsive/js/dataTables.responsive.js',
        'node_modules/amaranjs/dist/js/jquery.amaran.js',
        'resources/assets/js/components/buttons-scripts.js',
        'resources/assets/js/components/datatables-scripts.js',
        'resources/assets/js/components/modals-scripts.js'
    ], 'public/js/bandel.js')
    .styles(['node_modules/datatables.net-bs/css/dataTables.bootstrap.css',
        'node_modules/amaranjs/dist/css/amaran.min.css',
        'node_modules/amaranjs/dist/css/animate.min.css'
    ], 'public/css/bandel.css')
    .copyDirectory('node_modules/bootstrap/dist/fonts', 'public/fonts')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .options({
        processCssUrls: false
    });
