const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
   .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'),
   ])
//    .webpackConfig({
//         resolve: {
//             alias: {
//                 'chart.js': 'chart.js/dist/Chart.js',
//             }
//         }
//    });
