<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ elixir('assets/css/laravel.css') }}">
</head>
<body>
<nav id="slide-menu" class="slide-menu" role="navigation">

    <div class="brand">
        <a href="/">
            <img src="/assets/img/laravel-logo-white.png" height="50">
        </a>
    </div>

    <ul class="slide-main-nav">
        <li><a href="/">Home</a></li>
        @include('partials.main-nav')
    </ul>

</nav>

    <div id="app">
        <nav class="main">
            <a href="/" class="brand nav-block">
                {!! svg('laravel-logo') !!}
                <span>SillyHead</span>
            </a>

            <ul class="main-nav mid-nav">
                @include('partials.main-nav')
            </ul>

            <ul class="main-nav right-nav">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
            </ul>
            <div class="responsive-sidebar-nav">
                <a href="#" class="toggle-slide menu-link btn">&#9776;</a>
            </div>
        </nav>
        @yield('content')
    </div>
    <!-- Scripts -->
    <script src="{{ asset('assets/js/laravel.js') }}"></script>
</body>
</html>
