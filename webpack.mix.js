const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();
    
    mix.browserSync('your-local-domain.test');

// Tambahkan baris ini untuk mengimpor Bootstrap
mix.js('resources/js/bootstrap.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps();
