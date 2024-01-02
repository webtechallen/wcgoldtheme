const mix = require("laravel-mix");

/*
Mix Asset Management



Mix provides a clean, fluent API for defining some Webpack build steps
for your laravel application. By default, we are compiling the Sass
file for the application as well as the bundl;ing og all the js files.

*/

mix.js("src/app.js", "./")
    .sass("src/app.scss", "./");