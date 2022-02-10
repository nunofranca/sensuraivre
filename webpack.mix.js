const mix = require('laravel-mix');
const {styles, js} = require("laravel-mix");

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


    //site
    .styles('resources/views/site/assets/css/owl.carousel.min.css', 'public/assets/css/site/owl.carousel.min.css')
    .styles('resources/views/site/assets/css/ticker-style.css', 'public/assets/css/site/ticker-style.css')
    .styles('resources/views/site/assets/css/flaticon.css', 'public/assets/css/site/flaticon.css')
    .styles('resources/views/site/assets/css/slicknav.css', 'public/assets/css/site/slicknav.css')
    .styles('resources/views/site/assets/css/animate.min.css', 'public/assets/css/site/animate.min.css')
    .styles('resources/views/site/assets/css/magnific-popup.css', 'public/assets/css/site/magnific-popup.css')
    .styles('resources/views/site/assets/css/fontawesome-all.min.css', 'public/assets/css/site/fontawesome-all.min.css')
    .styles('resources/views/site/assets/css/themify-icons.css', 'public/assets/css/site/themify-icons.css')
    .styles('resources/views/site/assets/css/slick.css', 'public/assets/css/site/slick.css')
    .styles('resources/views/site/assets/css/nice-select.css', 'public/assets/css/site/nice-select.css')
    .styles('resources/views/site/assets/css/style.css', 'public/assets/css/site/style.css')

    .js('resources/views/site/assets/js/vendor/modernizr-3.5.0.min.js', 'public/assets/js/site/modernizr-3.5.0.min.js')
    .js('node_modules/jquery/dist/jquery.js', 'public/assets/js/site/jquery.js')
    .js('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/assets/js/site/bootstrap.bundle.js')

    .js('resources/views/site/assets/js/jquery.slicknav.min.js', 'public/assets/js/site/jquery.slicknav.min.js')
    .js('resources/views/site/assets/js/owl.carousel.min.js', 'public/assets/js/site/owl.carousel.min.js')
    .js('resources/views/site/assets/js/slick.min.js', 'public/assets/js/site/slick.min.js')
    .js('resources/views/site/assets/js/wow.min.js', 'public/assets/js/site/wow.min.js')
    .js('resources/views/site/assets/js/animated.headline.js', 'public/assets/js/site/animated.headline.js')
    .js('resources/views/site/assets/js/gijgo.min.js', 'public/assets/js/site/gijgo.min.js')
    .js('resources/views/site/assets/js/jquery.magnific-popup.js', 'public/assets/js/site/jquery.magnific-popup.js')
    .js('resources/views/site/assets/js/jquery.ticker.js', 'public/assets/js/site/jquery.ticker.js')
    .js('resources/views/site/assets/js/site.js', 'public/assets/js/site/site.js')
    .js('resources/views/site/assets/js/jquery.scrollUp.min.js', 'public/assets/js/site/jquery.scrollUp.min.js')
    .js('resources/views/site/assets/js/jquery.nice-select.min.js', 'public/assets/js/site/jquery.nice-select.min.js')
    .js('resources/views/site/assets/js/jquery.sticky.js', 'public/assets/js/site/jquery.sticky.js')
    .js('resources/views/site/assets/js/contact.js', 'public/assets/js/site/contact.js')
    .js('resources/views/site/assets/js/jquery.form.js', 'public/assets/js/site/jquery.form.js')
    .js('resources/views/site/assets/js/jquery.validate.min.js', 'public/assets/js/site/jquery.validate.min.js')
    .js('resources/views/site/assets/js/mail-script.js', 'public/assets/js/site/mail-script.js')
    .js('resources/views/site/assets/js/jquery.ajaxchimp.min.js', 'public/assets/js/site/jquery.ajaxchimp.min.js')
    .js('resources/views/site/assets/js/plugins.js', 'public/assets/js/site/plugins.js')
    .js('resources/views/site/assets/js/main.js', 'public/assets/js/site/main.js')

    .copyDirectory('resources/views/site/assets/img','public/assets/images/site')
    .copyDirectory('resources/views/site/assets/fonts','public/assets/fonts')

    .version()
