const mix = require('laravel-mix');

mix.options({
    processCssUrls: false
});

mix.js('resources/js/app.js', 'public/libs');