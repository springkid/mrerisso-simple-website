var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

/* See more at: http://transmission.vehikl.com/adding-twitter-bootstrap-to-your-laravel-5-app/ */
elixir(function(mix) {
    var bootstrapPath = 'node_modules/bootstrap-sass/assets'; 
    var materialBootstrapPath = 'node_modules/bootstrapmaterial-design/dist';     
    mix.sass('app.scss')
    	.copy(bootstrapPath + '/fonts', 'public/fonts')
    	.copy(bootstrapPath + '/javascripts/bootstrap.min.js', 'public/js')
    	.copy(materialBootstrapPath + '/css', 'public/css')
    	.copy(materialBootstrapPath + '/js', 'public/js')
    	.browserify('app.js'); 
});