let mix = require('laravel-mix');

// Browser Hot reload 
//mix.browserSync('test-integration.local');

// variables
var pathAssets = './resources/assets/frontend';
var pathPublic = './public/frontend';

// Ne marche
// mix.babel([
//     pathAssets + '/js/app.js',
// ], pathPublic + '/js/app.js');

mix.js(pathAssets + '/js/app.js', pathPublic + '/js/app.js');

mix.sass(pathAssets + '/sass/app.scss', pathPublic + '/css/app.css').options({ processCssUrls: false });

// Browser Hot reload
// mix.browserSync({
//     proxy: 'test-multi-auth-hesto.local'
// });