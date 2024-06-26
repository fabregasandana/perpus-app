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
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="{{ asset('app.css') }}"> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <!-- Scripts -->
    @vite(['resources/sass/app.scss'])
    <style>
 @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap');

::after,
::before {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
}

a {
    text-decoration: none;
}

li {
    list-style: none;
}

h1 {
    font-weight: 600;
    font-size: 1.5rem;
}

body {
    font-family: 'Poppins', sans-serif;
}

.wrapper {
    display: flex;
}

.main {
    min-height: 100vh;
    width: 100%;
    overflow: hidden;
    transition: all 0.35s ease-in-out;
    background-color: #fafbfe;
}

#sidebar {
    width: 70px;
    min-width: 70px;
    z-index: 1000;
    transition: all .25s ease-in-out;
    background: linear-gradient(45deg, rgba(193, 236, 245, .5), #C1ECF5);
    display: flex;
    flex-direction: column;
}

#sidebar.expand {
    width: 240px;
    min-width: 240px;
    border-radius: 0 50px 50px 0;
}

.toggle-btn {
    background-color: transparent;
    cursor: pointer;
    border: 0;
    padding: 1rem 1.5rem;
}

.toggle-btn i {
    font-size: 1.5rem;
    color: #000;
}

.sidebar-logo {
    margin: auto 0;
}

.sidebar-logo a {
    color: #000;
    font-size: 1.15rem;
    font-weight: 600;
}

#sidebar:not(.expand) .sidebar-logo,
#sidebar:not(.expand) a.sidebar-link span {
    display: none;
}

.sidebar-nav {
    padding: 2rem 0;
    flex: 1 1 auto;
}

a.sidebar-link {
    padding: .625rem 1.625rem;
    color: #000;
    display: block;
    font-size: 0.9rem;
    white-space: nowrap;
    border-left: 3px solid transparent;
}

.sidebar-link i {
    font-size: 1.1rem;
    margin-right: .75rem;
}

a.sidebar-link:hover {
    background-color: rgba(255, 255, 255, .075);
    border-left: 3px solid #3b7ddd;
}

.sidebar-item {
    position: relative;
}

#sidebar:not(.expand) .sidebar-item .sidebar-dropdown {
    position: absolute;
    top: 0;
    left: 70px;
    background-image: linear-gradient(180deg, rgba(193, 236, 245, 1), #C1ECF5);
    padding: 0;
    min-width: 15rem;
    display: none;
}

#sidebar:not(.expand) .sidebar-item:hover .has-dropdown+.sidebar-dropdown {
    display: block;
    max-height: 15em;
    width: 100%;
    opacity: 1;
}

#sidebar.expand .sidebar-link[data-bs-toggle="collapse"]::after {
    border: solid;
    border-width: 0 .075rem .075rem 0;
    content: "";
    display: inline-block;
    padding: 2px;
    position: absolute;
    right: 1.5rem;
    top: 1.4rem;
    transform: rotate(-135deg);
    transition: all .2s ease-out;
}

#sidebar.expand .sidebar-link[data-bs-toggle="collapse"].collapsed::after {
    transform: rotate(45deg);
    transition: all .2s ease-out;
}

#search{
    background-color: #eaeaea;
    height: 35px;
}

#search::placeholder{
    text-align: center;
}

#search:focus{
    outline-color: #e3e3e3;
}

.add{
    min-height: 90vh;
}

.wrap{
        background-color: #eaeaea;
        border-radius: 30px;
    }
    </style>
</head>

<body>
    <div class="wrapper">
        <aside id="sidebar">
            <div class="d-flex">
                <button class="toggle-btn" type="button">
                    <i class="lni lni-grid-alt"></i>
                </button>
                <div class="sidebar-logo">
                    <a href="/">dPerpus</a>
                </div>
            </div>
            <ul class="sidebar-nav">
                <li class="sidebar-item">
                    <a href="/homepage" class="sidebar-link">
                        <i class="bi bi-house"></i>
                        <span>Home</span>
                    </a>
                </li>

                <li class="sidebar-item">
                    <a href="/profile/{{ Auth::user()->id }}" class="sidebar-link">
                        <i class="bi bi-person"></i>
                        <span>Profile</span>
                    </a>
                </li>
                @auth
                    @if (Auth::user()->role === 'admin' || Auth::user()->role === 'petugas')
                        
                    <li class="sidebar-item">
                        <a href="/databuku" class="sidebar-link">
                            <i class="lni lni-book"></i>
                            <span>Data Buku</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="/datapetugas" class="sidebar-link">
                            <i class="lni lni-popup"></i>
                            <span>Data Petugas</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="/datauser" class="sidebar-link">
                            <i class="lni lni-cog"></i>
                            <span>Data User</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="/kategori" class="sidebar-link">
                            <i class="bi bi-list-ul"></i>
                            <span>Kategori</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="/laporanpeminjam" class="sidebar-link">
                            <i class="bi bi-journal-text"></i>
                            <span>Laporan Peminjaman</span>
                        </a>
                    </li>
                    @else
                    
                <li class="sidebar-item">
                    <a href="/daftarpeminjaman" class="sidebar-link">
                        <i class="bi bi-book"></i>
                        <span>Daftar Pinjaman</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a href="/koleksi" class="sidebar-link">
                        <i class="bi bi-bookmark"></i>
                        <span>Koleksi</span>
                    </a>
                </li>
                    @endif
                @endauth
            </ul>
        </aside>
        <div class="main p-0 container-fluid">
            <div id="app">
                <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm z-1 border border-bottom" style="--bs-border-opacity: .5;">
                    <div class="container-fluid">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>
        
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav ms-auto col-lg-4">
                                @auth
                                @if (Auth::user()->role === 'user')
                                <li class="nav-item dropdown p-2">
                                    <a class="nav-link dropdown-toggle fw-bold text-dark" type="button" data-bs-toggle="dropdown" aria-expanded="false">Kategori</a>
                                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        
                                    </ul>
                                </li>
                                <li class="nav-item p-2">
                                    <a href="{{ url('') }}" class="nav-link fw-bold text-dark">Rekomendasi</a>
                                </li>
                                <li class="nav-item p-2">
                                    <a href="{{ url('') }}" class="nav-link fw-bold text-dark">Populer</a>
                                </li>
                                @endif
                                @endauth
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
                                            {{ Auth::user()->username }}
                                        </a>
        
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            @auth
                                                @if (Auth::user()->role === 'admin' || Auth::user()->role === 'petugas')
                                                    <a class="dropdown-item" href="/dashboard">Dashboard</a>
                                                @endif
                                                    <a class="dropdown-item" href="/profile/{{Auth::user()->id}}">Profile</a>
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
            @yield('card')
            @yield('data')
            @yield('create')
            @yield('catalog')
            @yield('detail')
            @yield('kategori')
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
    <script>
        const hamBurger = document.querySelector(".toggle-btn");

hamBurger.addEventListener("click", function () {
  document.querySelector("#sidebar").classList.toggle("expand");
});

document.getElementById('cetak').addEventListener('click', function () {
            // Panggil fungsi untuk cetak dan pindah halaman
            cetakDanPindahHalaman();
            cetakHalaman();
        });

        function cetakDanPindahHalaman() {
            // Lakukan pengalihan halaman
            window.location.href = '/cetaklaporan';
            // Setelah pengalihan, lakukan pencetakan
        }
        function cetakHalaman(){
            window.print();
        }
</script>
</body>

</html>