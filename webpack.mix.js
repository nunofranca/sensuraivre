const mix = require('laravel-mix');

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

mix
    //boostrap
    .js('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/assets/bootstrap/js/script.js')
    .styles('node_modules/bootstrap/dist/css/bootstrap.css', 'public/assets/bootstrap/css/style.css')

    //filepond
    .js('node_modules/filepond/dist/filepond.js', 'public/assets/filepond/js/filepond.js')
    .js('node_modules/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.js', 'public/assets/filepond/js/filepond-plugin-image-preview.js')
    .styles('node_modules/filepond/dist/filepond.css', 'public/assets/filepond/css/filepond.css')
    .styles('node_modules/filepond-plugin-image-preview/dist/filepond-plugin-image-preview.css', 'public/assets/filepond/css/filepond-plugin-image-preview.css')


    //auth-login

    .js('resources/views/assets/js/plugins/perfect-scrollbar.min.js', 'public/assets/js/auth/login/perfect-scrollbar.js')
    .js('resources/views/assets/js/plugins/smooth-scrollbar.min.js', 'public/assets/js/auth/login/smooth-scrollbar.js')
    .styles('resources/views/assets/css/soft-ui-dashboard.css', 'public/assets/css/auth/login/soft-ui-dashboard.css')


    //painel
    .styles('resources/views/assets/css/soft-ui-dashboard.css', 'public/assets/css/painel/soft-ui-dashboard.css')
    .js('resources/views/assets/js/soft-ui-dashboard.js', 'public/assets/js/painel/soft-ui-dashboard.js')
    .version()
