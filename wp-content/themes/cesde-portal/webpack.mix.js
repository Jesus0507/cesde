let mix = require('laravel-mix');


mix.js('src/js/index.js', 'js/main.js')
    .sass('src/sass/index.scss','css/main.css')
    .setPublicPath('assets')
    .sourceMaps()
    .version();