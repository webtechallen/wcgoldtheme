const mix = require("laravel-mix");

mix.options({
    processCssUrls: false
})
.webpackConfig({
    mode: 'development' // Set the mode to 'development'
})
.js("src/app.js", "./")
.sass("src/app.scss", "./");
