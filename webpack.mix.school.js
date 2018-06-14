let mix = require('laravel-mix');

// variables
var pathAssets = './resources/assets/school';
var pathPublic = './public/school';

mix.babel([
    pathAssets + '/js/jquery-3.3.1.slim.min.js',
    pathAssets + '/js/popper.min.js',
    pathAssets + '/js/bootstrap.min.js',
    pathAssets + '/js/app.js',
], pathPublic + '/js/app.js');

mix.sass(pathAssets + '/sass/app.scss', pathPublic + '/css/app.css').options({ processCssUrls: false });