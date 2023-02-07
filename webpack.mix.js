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
    .js('resources/js/header.js', 'public/js/pages/header.js')
    .js('resources/js/pages/home.js', 'public/js/pages/home.js')
    .js('resources/js/pages/projects.js', 'public/js/pages/projects.js')
    .js('resources/js/pages/show.js', 'public/js/pages/show.js')
    .js('resources/js/pages/about.js', 'public/js/pages/about.js')
    .js('resources/js/pages/contact.js', 'public/js/pages/contact.js')
    .js('resources/js/pages/hire_us.js', 'public/js/pages/hire_us.js')
    .js('resources/js/pages/free_consulting.js', 'public/js/pages/free_consulting.js')

    .copy('resources/plugins', 'public/plugins')
    .copy('resources/img', 'public/img')

    .sass('resources/sass/app.scss', 'public/css/app.css')
    .sass('resources/sass/pages/home.scss', 'public/css/home.css')
    .sass('resources/sass/pages/projects.scss', 'public/css/projects.css')
    .sass('resources/sass/pages/show.scss', 'public/css/show.css')
    .sass('resources/sass/pages/about.scss', 'public/css/about.css')
    .sass('resources/sass/pages/contact.scss', 'public/css/contact.css')
    .sass('resources/sass/pages/hire_us.scss', 'public/css/hire_us.css')
    .sass('resources/sass/pages/free_consulting.scss', 'public/css/free_consulting.css')
    .sass('resources/sass/pages/terms.scss', 'public/css/terms.css')
    .sass('resources/sass/pages/privacy_policy.scss', 'public/css/privacy_policy.css')

    .postCss('resources/css/app.css', 'public/css', [
    ]);
