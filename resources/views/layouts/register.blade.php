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
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    <style>
        body{
            background-color: #fff;
        }

        #navbarDropdown{
            font-size: 20px;
        }

        .dropdown:hover>.dropdown-menu{
            display: block;
        }
        .dropdown>.btn:active {
            pointer-events: none;
        }

        .container{
            height: 85vh;
        }

        .card{
            border-radius: 20px;
            background-color: #99DCED;
        }

        .form-control{
            border: none;
            border-bottom: 2px solid black;
            border-radius: 0;
            background-color: transparent;
        }

        .a-2::after{
            content: "";
            width: 85px;
            height: 5px;
            border-radius: 15px;
            background-color: #000;
            position: absolute;
            bottom: 17px;
            display: flex;
            left: 56%;
        }
    </style>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md shadow-sm p-2">
            <div class="container-fluid">
                <p class="h2 ps-1" style="font-family: 'Dela Gothic One'">dPerpus</p>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown me-5">
                            <button class="btn" type="button" data-bs-toggle="dropdown"  id="navbarDropdown" aria-expanded="false">Contact Us</button>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a href="" class="dropdown-item">Whatsapp</a></li>
                                <li><a href="" class="dropdown-item">Instagram</a></li>
                                <li><a href="" class="dropdown-item">Github</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

    </div>
    <main class="py-4">
        @yield('content')
    </main>

</body>
</html>
