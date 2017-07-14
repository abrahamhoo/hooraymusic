var elixir = require('laravel-elixir');

elixir(function(mix) {
    mix.sass('laravel.scss', 'public/assets/css');

    mix.scripts(
        [

            'jquery.min.js',
            'plugins/bootstrap.min.js',
            'plugins/scotchPanels.js',//生成侧边栏
            'plugins/mousetrap.js',//响应键盘事件
            'plugins/canvas-nest.min.js',//背景动画
            'laravel.js'
        ],
        'public/assets/js/laravel.js',
        'resources/assets/js/'
    );

    mix.version(['assets/css/laravel.css', 'assets/js/laravel.js']);
});
