<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Maidah - Login</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
                <link href="{{ asset('css/theme.css') }}" rel="stylesheet">
                <link href="https://fonts.googleapis.com/css?family=Fredoka+One|Roboto:300,400" rel="stylesheet">
                <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.3.1/css/ol.css" type="text/css">
</head>
<body>
    <div id="app">
    <div class="bg-dark navbar-dark text-white">
                        <div class="container">
                                <nav class="navbar px-0 navbar-expand-lg navbar-dark">
                                <a class="navbar-brand" href="/home"><h5 class="display-5">Maidah</h5></a>
                                <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                                </button>
                                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                                <div class="navbar-nav">
                                                        <li class="{{ Request::path() === 'submit' ? 'nav-item active' : '' }}">  
                                                        <a class="nav-link" href="/submit">submit</a>
                                                        </li>
                                                        <li class="{{ Request::path() === 'location' ? 'nav-item active' : '' }}">  
                                                        <a class="nav-link" href="/location">location</a>
                                                        </li>
                                                        <li class="{{ Request::path() === 'api' ? 'nav-item active' : '' }}">  
                                                        <a class="nav-link" href="/api">api</a>
                                                        </li>
                                                        <li class="{{ Request::path() === 'about' ? 'nav-item active' : '' }}">  
                                                        <a class="nav-link" href="/about">about</a>
                                                        </li>
                                                </div>
                                                        <ul class="nav navbar-nav ml-auto">
                                                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                                        </div>
                                </nav>
                        </div>
                </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
