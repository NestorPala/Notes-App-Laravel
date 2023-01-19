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

mix.js('resources/js/app.js', 'public/js')
    .react()
    .postCss('resources/css/app.css', 'public/css', [
        //
    ])
    .browserSync({
        proxy: 'http://127.0.0.1:8000/',
        files: [
            'resources/views/**/*.php', 
            'app/**/*.php', 
            'routes/**/*.php', 
            'public/js/*.js', 
            'public/css/*.css'
        ]
    });
