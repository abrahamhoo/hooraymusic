<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title><?php echo e(isset($title) ? $title . ' - ' : null); ?>Silly Head Radio Station</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="author" content="Taylor Otwell">
    <meta name="description" content="Laravel - The PHP framework for web artisans.">
    <meta name="keywords" content="laravel, php, framework, web, artisans, taylor otwell">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php if(isset($canonical)): ?>
        <link rel="canonical" href="<?php echo e(url($canonical)); ?>" />
        <?php endif; ?>
	<!--[if lte IE 9]>
        <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link href='https://fonts.googleapis.com/css?family=Miriam+Libre:400,700|Source+Sans+Pro:200,400,700,600,400italic,700italic' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo e(elixir('assets/css/laravel.css')); ?>">
        <link rel="apple-touch-icon" href="/favicon.png">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.min.js"></script>
</head>
<body class="<?php echo $__env->yieldContent('body-class', 'docs'); ?> language-php">

<span class="overlay"></span>

<nav class="main">
    <a href="/" class="brand nav-block">
        <?php echo svg('laravel-logo'); ?>

        <span>SillyHead</span>
    </a>

    <div class="search nav-block">
        <h1>Let Music Inspire Your Life.</h1>
    </div>

    <ul class="main-nav" v-if="! search">
        <?php echo $__env->make('partials.main-nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </ul>

    <?php if(Request::is('docs*') && isset($currentVersion)): ?>
        <?php echo $__env->make('partials.switcher', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>

    <div class="responsive-sidebar-nav">
        <a href="#" class="toggle-slide menu-link btn">&#9776;</a>
    </div>
</nav>

<?php echo $__env->yieldContent('content'); ?>

<footer class="main">
    <ul>
        <?php echo $__env->make('partials.main-nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </ul>
    <p>Laravel is a trademark of Taylor Otwell. Copyright &copy; Taylor Otwell.</p>
    <p class="less-significant">
        <a href="http://jackmcdade.com">
            Designed by<br>
            <?php echo svg('jack-mcdade'); ?>

        </a>
    </p>
</footer>

<script>
    var algolia_app_id      = '<?php echo Config::get('algolia.connections.main.id', false); ?>';
    var algolia_search_key  = '<?php echo Config::get('algolia.connections.main.search_key', false); ?>';
            <?php if(isset($currentVersion)): ?>
    var version             = '<?php echo $currentVersion; ?>';
    <?php endif; ?>
</script>

<?php echo $__env->make('partials.algolia_template', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<script src="<?php echo e(elixir('assets/js/laravel.js')); ?>"></script>
<script src="/assets/js/viewport-units-buggyfill.js"></script>
<script>window.viewportUnitsBuggyfill.init();</script>
<script>
    var _gaq=[['_setAccount','UA-23865777-1'],['_trackPageview']];
    (function(d,t){
        var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
        g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
        s.parentNode.insertBefore(g,s)
    }(document,'script'));
</script>
</body>
</html>
