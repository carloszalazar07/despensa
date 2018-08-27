let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.js('resources/assets/js/app.js', 'public/js')
//    .sass('resources/assets/sass/app.scss', 'public/css');
mix.styles(['resources/assets/css/bootstrap.min.css',
			'resources/assets/css/shards-dashboards.1.0.0.min.css',
			'resources/assets/css/extras.1.0.0.min.css',
			'resources/assets/css/estilos.css'], 'public/css/main.css')
.scripts(['resources/assets/js/buttons.js',
		'resources/assets/js/jquery-3.3.1.min.js',
		'resources/assets/js/popper.min.js',
		'resources/assets/js/bootstrap.min.js',
		'resources/assets/js/bootstrap.min.js',
		'resources/assets/js/chart.min.js',
		'resources/assets/js/shards.min.js',
		'resources/assets/js/jquery.sharrre.min.js',
		'resources/assets/js/extras.1.0.0.min.js',
		'resources/assets/js/shards-dashboards.1.0.0.min.js',
		'resources/assets/js/shards-dashboards.1.0.0.min.js',
		'resources/assets/js/app-blog-overview.1.0.0.js'], 'public/js/main.js');
