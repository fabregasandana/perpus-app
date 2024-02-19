@extends('layouts.landing')

@section('content')
    {{-- <div class="container-fluid landing p-0"> --}}
        {{-- <div class="d-flex flex-row align-items-center justify-content-between" style="height: 90vh">
            <div class="title col-lg-5 col-sm-8 ms-md-5 d-block">
                <h1 class="col-lg-6">Find Your Best Friend</h1>
                <p class="fs-4">The most appropriate book site</p>
            </div>
            <div class="thumb col-lg-5 col-sm-4"> 0
                <img src="{{ asset('/images/book.png') }}" alt="" class="img-fluid">
            </div>
        </div> --}}
        {{-- <div class="row align-items-sm-center justify-content-lg-end" style="height: 90vh;">
            <div class="title col-md-6 col-sm-6 ms-md-5">
                <h1 class="col-md-5">Find Your Best Friend</h1>
                <p class="fs-4">The most appropriate book site</p>
            </div>
            <div class="thumb col-md-5 col-sm-6">
                <img src="{{ asset('/images/book.png') }}" alt="" class="img-fluid">
            </div>
        </div>
        <img src="{{ asset('/images/wave.png') }}" alt="" class="wave-1 img-fluid">
    </div> --}}

    <div class="container-fluid">
        <div class="row align-items-center justify-content-center" style="height: 150vh;">
            <div class="col-md-6 col-sm-6 d-flex justify-content-center" style="">
                <div class="col-md-6 col-sm-4 d-flex align-items-start flex-column">
                    <h1 class="title text-start">Find Your <br> Best Friend</h1>
                    <p class="fs-4 col-md-12 text-start">The most appropriate book site</p>    
                </div>
            </div>
            <div class="col-md-6 col-sm-4 text-center" style="">
                <img src="{{ asset('/images/book.png') }}" alt="" class="img-fluid" style="height: 450px;">
            </div>
            <div class="col-12 p-0 position-relative" style="height: 10vh; nn">
                <img src="{{ asset('/images/wave.png') }}" alt="" class="wave-1 img-fluid">
            </div>
        </div>
    </div>
@endsection

@section('content-1')
    <div class="recomend container-sm">
        <ul class="d-flex flex-row justify-content-around align-items-center navbar-nav">
            <li><a href="" class="nav-link">Komedi</a></li>
            <li><a href="" class="nav-link">Romantis</a></li>
            <li><a href="" class="nav-link">Pendidikan</a></li>
            <li><a href="" class="nav-link">Cerpen</a></li>
            <li><a href="" class="nav-link">Novel</a></li>
            <li><a href="" class="nav-link">Majalah</a></li>
            <li><a href="" class="nav-link">Ensiklopedia</a></li>
        </ul>
    </div>
    <div class="container-fluid col-lg-12 d-flex flex-column justify-content-end p-5 mt-5">
        <div class="rating">
            <p class="h3 fw-bold">Top Rating</p>
        </div>
        <div class="container-fluid d-flex flex-row justify-content-between align-items-center p-0 mt-3 gap-5 ">
            <div class="card d-flex align-items-center border-0 more">
                <div class="section overflow-hidden">
                    <img src="{{ asset('/images/banner-wmn.png') }}" alt="" class="img-fluid">
                </div>
                <a href="" class="btn" role="button">Lebih Banyak</a>
            </div>
            <div class="card d-flex flex-column align-items-center justify-content-center book border-0 p-0">
                <div class="wrapper border border-secondary border-1 p-0">
                    <img src="{{ asset('/images/mantappu.jpg') }}" alt="" class="img-fluid cover">
                </div>
                <div class="rate">
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                </div>
                <div class="title-book">
                    <p class="fs-5 fw-bold">Mantappu Jiwa</p>
                </div>
            </div>
            <div class="card d-flex flex-column align-items-center justify-content-center book border-0 p-0">
                <div class="wrapper border border-secondary border-1 p-0">
                    <img src="{{ asset('/images/mantappu.jpg') }}" alt="" class="img-fluid cover">
                </div>
                <div class="rate">
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                </div>
                <div class="title-book">
                    <p class="fs-5 fw-bold">Mantappu Jiwa</p>
                </div>
            </div>
            <div class="card d-flex flex-column align-items-center justify-content-center book border-0 p-0">
                <div class="wrapper border border-secondary border-1 p-0">
                    <img src="{{ asset('/images/mantappu.jpg') }}" alt="" class="img-fluid cover">
                </div>
                <div class="rate">
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                </div>
                <div class="title-book">
                    <p class="fs-5 fw-bold">Mantappu Jiwa</p>
                </div>
            </div>
            <div class="card d-flex flex-column align-items-center justify-content-center book border-0 p-0">
                <div class="wrapper border border-secondary border-1 p-0">
                    <img src="{{ asset('/images/mantappu.jpg') }}" alt="" class="img-fluid cover">
                </div>
                <div class="rate">
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                </div>
                <div class="title-book">
                    <p class="fs-5 fw-bold">Mantappu Jiwa</p>
                </div>
            </div>
            <div class="card d-flex flex-column align-items-center justify-content-center book border-0 p-0">
                <div class="wrapper border border-secondary border-1 p-0">
                    <img src="{{ asset('/images/mantappu.jpg') }}" alt="" class="img-fluid cover">
                </div>
                <div class="rate">
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                </div>
                <div class="title-book">
                    <p class="fs-5 fw-bold">Mantappu Jiwa</p>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid col-lg-12 d-flex flex-column justify-content-end p-5 books">
        <div class="rating">
            <p class="h3 fw-bold">Baru Dirilis</p>
        </div>
        <div class="container-fluid d-flex flex-row justify-content-between align-items-center p-0 mt-3 gap-5 ">
            <div class="card d-flex align-items-center border-0 more">
                <div class="section overflow-hidden">
                    <img src="{{ asset('/images/banner-mn.png') }}" alt="" class="img-fluid">
                </div>
                <a href="" class="btn" role="button">Lebih Banyak</a>
            </div>
            <div class="card align-items-center book border-0 p-0">
                <div class="wrapper border border-secondary border-1 p-0">
                    <img src="{{ asset('/images/mantappu.jpg') }}" alt="" class="img-fluid cover">
                </div>
                <div class="rate">
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                </div>
                <div class="title-book">
                    <p class="fs-5 fw-bold">Mantappu Jiwa</p>
                </div>
            </div>
            <div class="card d-flex flex-column align-items-center justify-content-center book border-0 p-0">
                <div class="wrapper border border-secondary border-1 p-0">
                    <img src="{{ asset('/images/mantappu.jpg') }}" alt="" class="img-fluid cover">
                </div>
                <div class="rate">
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                </div>
                <div class="title-book">
                    <p class="fs-5 fw-bold">Mantappu Jiwa</p>
                </div>
            </div>
            <div class="card d-flex flex-column align-items-center justify-content-center book border-0 p-0">
                <div class="wrapper border border-secondary border-1 p-0">
                    <img src="{{ asset('/images/mantappu.jpg') }}" alt="" class="img-fluid cover">
                </div>
                <div class="rate">
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                </div>
                <div class="title-book">
                    <p class="fs-5 fw-bold">Mantappu Jiwa</p>
                </div>
            </div>
            <div class="card d-flex flex-column align-items-center justify-content-center book border-0 p-0">
                <div class="wrapper border border-secondary border-1 p-0">
                    <img src="{{ asset('/images/mantappu.jpg') }}" alt="" class="img-fluid cover">
                </div>
                <div class="rate">
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                </div>
                <div class="title-book">
                    <p class="fs-5 fw-bold">Mantappu Jiwa</p>
                </div>
            </div>
            <div class="card d-flex flex-column align-items-center justify-content-center book border-0 p-0">
                <div class="wrapper border border-secondary border-1 p-0">
                    <img src="{{ asset('/images/mantappu.jpg') }}" alt="" class="img-fluid cover">
                </div>
                <div class="rate">
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                    <span class="bi bi-star-fill checked"></span>
                </div>
                <div class="title-book">
                    <p class="fs-5 fw-bold">Mantappu Jiwa</p>
                </div>
            </div>
        </div>
    </div>

    {{-- <footer class="footer container-fluid p-0 row col-xl-12">
        <div class="main-footer p-0">
            <div class="about-us d-flex flex-column p-0">
                <p>About Us</p>
                <div class="container-fluid email d-flex bg-danger p-0 align-items-center">
                    <i class="fa fa-envelope"></i>
                    <p class="">dperpusaja@gmail.com</p>    
                </div>
                <div class="location">
                    <i class="fa fa-location"><p>Jl. Jamin Ginting Km. 11 No. 9C, Simpang Selayang, Kec. Medan Tuntungan, Kota Medan, Sumatera Utara 20135</p></i>    
                </div>
            </div>
        </div>
    </footer> --}}

    <footer class=" text-lg-start text-dark fw-bold">
        <div class="container p-sm-3 p-lg-0">
            <div class="pt-5">
                <div class="row">
                    <div class="col-lg-10 col-md-8 mb-4">
                        <h1 class="text-uppercase fw-bold">ABOUT US</h1>
                        <div class="email d-flex p-0 align-items-center gap-2">
                            <p><i class="bi bi-envelope-fill"></i></p>
                            <p class="">dperpusaja@gmail.com</p>    
                        </div>
                        <div class="location d-flex align-items-center p-0 gap-2">
                            <p><i class="bi bi-geo-alt-fill"></i></p>
                            <p class="text-md-start">Jl. Jamin Ginting Km. 11 No. 9C, Simpang Selayang, Kec. Medan Tuntungan,<br> Kota Medan, Sumatera Utara 20135</p>    
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-4">
                        <h1 class="text-uppercase fw-bold">Contact</h1>
                        <ul class="list-unstyled">
                            <li class="instagram d-flex align-items p-0 gap-2">
                                <p><i class="bi bi-instagram"></i></p>
                                <p>Instagram</p>
                            </li>
                            <li class="instagram d-flex align-items p-0 gap-2">
                                <p><i class="bi bi-whatsapp"></i></p>
                                <p>Whatsapp</p>
                            </li>
                            <li class="instagram d-flex align-items p-0 gap-2">
                                <p><i class="bi bi-github"></i></p>
                                <p>Github</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid text-baseline p-3 copy col-md-12">
            <h4 class="fw-bold pt-3">&copy; 2024 Copyright: Fabregas Andana</h4>
        </div>
    </footer>
@endsection