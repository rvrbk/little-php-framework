let mix = require('laravel-mix');

mix.js('assets/app.js', 'public')
    .sass('assets/app.scss', 'public');