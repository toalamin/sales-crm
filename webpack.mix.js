const mix = require('laravel-mix');

mix
/* CSS */
    .sass('resources/sass/main.scss', 'public/css/dashmix.css')
    .sass('resources/sass/dashmix/themes/xeco.scss', 'public/css/themes/')
    .sass('resources/sass/dashmix/themes/xinspire.scss', 'public/css/themes/')
    .sass('resources/sass/dashmix/themes/xmodern.scss', 'public/css/themes/')
    .sass('resources/sass/dashmix/themes/xsmooth.scss', 'public/css/themes/')
    .sass('resources/sass/dashmix/themes/xwork.scss', 'public/css/themes/')
    .sass('resources/sass/dashmix/themes/xdream.scss', 'public/css/themes/')
    .sass('resources/sass/dashmix/themes/xpro.scss', 'public/css/themes/')
    .sass('resources/sass/dashmix/themes/xplay.scss', 'public/css/themes/')

    /* JS */
    .js('resources/js/laravel/app.js', 'public/js/laravel.app.js')
    .js('resources/js/dashmix/app.js', 'public/js/dashmix.app.js')

    /* Options */
    .options({
        processCssUrls: false
    })
    .version();
