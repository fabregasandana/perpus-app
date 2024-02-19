<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dela+Gothic+One&family=Katibeh&family=Quicksand:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhaijaan+2&family=Dela+Gothic+One&family=Katibeh&family=Quicksand:wght@500;600;700&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{ asset('app.css') }}"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <style>
    @font-face{
        font-family: 'Baloo Bhaijaan';
        src: url('BalooBhaijaan-Regular.ttf');
    }

    .dropdown:hover>.dropdown-menu {
        display: block;
    }

    .dropdown>.dropdown-toggle:active {
        pointer-events: none;
    }

    .rounded-pill{
        background-color: black;
        width: 6rem;
    }
    
    .title{
        font-family: 'Baloo Bhaijaan';
        font-weight: 700;
        font-size: 65px;
    }

    .landing{
        /* height: 90vh; */
        /* background-color: #000; */
    }

    .wave-1{
        /* width: 120vw; */
        /* height: 100%; */
        position: relative;
        top: -53rem;
        z-index: -1;
        width: 100%;
        /* height: 90vh; */
    }

    .recomend{
        /* position: relative;
        top: 25rem; */
    }

    .recomend{
        background-color: #eaeaea;
        border-radius: 10px;
    }

    .recomend .navbar-nav{
        height: 45px;
        display: flex;
        align-items: center;
    }

    .thumb{
        /* background-color: #000; */
    }

    /* .thumb img{
        height: 375px;
    } */

    .more{
        width: 14rem;
        height: 370px;
        background-color: #eaeaea;
        border-radius: 25px;
    }

    .section img{
        width: 14rem;
        border-radius: 25px;
    }

    .book{
        /* height: 500px; */
        background-color: transparent
    }

    .cover{
        width: 10.5rem;
        height: 250px;
        position: relative;
        top: -5px;
        left: -5px;
        border-radius: 20px;
    }

    .checked{
        color: orange;
    }

    .wrapper{
        /* position: relative; */
        width: 10.8rem;
        height: 255px;
        background-color: #fff;
        border-radius: 20px;
        border: 1px black
    }

    .books{
        background-image: linear-gradient(to bottom, rgb(255, 255, 255), #99DCED);
    }

    footer{
        background-color: #62C5DD;
    }

    footer h1{
        font-family: 'Quicksand';
        
    }

    .copy{
        background-color: #62C5DD;
        font-family: 'Quicksand';
        border-top: 1px solid #299ebb;
    }
    </style>

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm z-1 border border-bottom" style="--bs-border-opacity: .5;">
            <div class="container-fluid">
                <a class="navbar-brand d-flex align-items-center" href="{{ url('/index') }}">
                    <p class="h2 ps-1" style="font-family: 'Dela Gothic One'">dPerpus</p>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ms-auto col-lg-2">
                        <li class="nav-item dropdown p-2">
                            <a class="nav-link dropdown-toggle fw-bold text-dark">Kategori</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="{{ url('') }}" class="dropdown-item">Romantis</a></li>
                                <li><a href="{{ url('') }}" class="dropdown-item">Komedi</a></li>
                                <li><a href="{{ url('') }}" class="dropdown-item">Komik</a></li>
                            </ul>
                        </li>
                        <li class="nav-item p-2">
                            <a href="{{ url('') }}" class="nav-link fw-bold text-dark">Rekomendasi</a>
                        </li>
                        <li class="nav-item p-2">
                            <a href="{{ url('') }}" class="nav-link fw-bold text-dark">Populer</a>
                        </li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto me-4 gap-4">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <a class="nav-link fw-bold" href="{{ route('login') }}" style=" color: #000;">{{ __('Login') }}</a>
                            @endif

                            @if (Route::has('register'))
                                <a class="nav-link rounded-pill text-white fw-normal d-flex align-items-center justify-content-center" href="{{ route('register') }}" style="background-color: #000; width: 5rem;">{{ __('Register') }}</a>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    @auth
                                        @if (Auth::user()->utype === 'ADM')
                                            <a class="dropdown-item" href="">Dashboard</a>
                                        @else
                                            <a class="dropdown-item" href="">Account</a>
                                        @endif
                                    @endauth
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

    </div>
    <main class="">
        @yield('content')
        @yield('content-1')
    </main>

</body>
</html>
