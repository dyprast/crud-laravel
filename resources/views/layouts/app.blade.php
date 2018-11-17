<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CRUD Romadhan</title>
    <link rel="icon" href="{{ asset('img/logo.png') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/native.css') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome/css/all.css') }}">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel" style="background-color: #fff; box-shadow: 0 5px 10px rgba(0,0,0,.1);z-index: 2;padding: 0;">
            <div class="container topnav">
                <a class="navbar-brand" href="{{ url('/') }}" style="color: #444;font-weight: bold;">
                    CRUD Romadhan <img src="{{ asset('img/logo.png') }}" style="width: 35px;">
                </a>
                <button class="navbar-toggler" style="color: white;border: none;" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" style="color: #fff" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" style="color: #fff" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item responsive">
                                <a class="nav-link no-color" href="{{ url('jurusan') }}">Jurusan</a>
                            </li>
                            <li class="nav-item responsive">
                                <a class="nav-link no-color" href="{{ url('kelas') }}">Kelas</a>
                            </li>
                            <li class="nav-item responsive">
                                <a class="nav-link no-color" href="{{ url('siswa') }}">Siswa</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" style="color: #fff;" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
                    </ul>
                </div>
            </div>
        </nav>
        <main class="main-page">
            @guest
            @else
            <nav class="sidenav">
                <div class="profile">
                    <i class="fas fa-user"></i>
                    <p class="h5">{{ Auth::user()->name }} (Administrator)</p>
                    <p>{{ Auth::user()->email }}</p>
                </div>
                <div class="menu">
                    <a href="{{ url('home') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                    <a href="{{ url('jurusan') }}"><i class="fab fa-grav"></i> Jurusan</a>
                    <a href="{{ url('kelas') }}"><i class="fas fa-door-open"></i> Kelas</a>
                    <a href="{{ url('siswa') }}"><i class="fas fa-graduation-cap"></i> Siswa</a>
                </div>
            </nav>
            @endguest
            @yield('content')
        </main>
    </div>
</body>
</html>
