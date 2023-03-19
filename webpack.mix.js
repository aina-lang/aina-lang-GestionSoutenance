const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.postCss('resources/css/app.css', 'public/css', [
  tailwindcss('tailwind.config.js'),
]);
