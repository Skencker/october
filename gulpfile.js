//configuration elixir laravel
var elixir = require('laravel-elixir');

require('laravel-elixir-livereload');

elixir.config.assetsPath = 'themes/olympos/assets/';
elixir.config.publicPath = 'themes/olympos/assets/compiled/';

elixir(function(mix) {
    mix.sass('style.scss');

    mix.scripts([
        'jquery.js',
        'app.js'
    ]);
})
