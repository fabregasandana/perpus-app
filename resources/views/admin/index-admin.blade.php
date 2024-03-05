@extends('admin.dashboard')

@section('card')
    <div class="row justify-content-center mt-5">
        <div class="col-md-3">
            <div class="card col-md-10 bg-primary text-light">
                <div class="row align-items-center">
                    <div class="card-body col-md-6 ps-4">
                        <h3 class="card-title">{{ $buku }}</h3>
                        <p class="card-text">Jumlah Buku</p>
                    </div>
                    <div class="card-icon col-md-6 text-center">
                        <img src="{{ asset('/images/buku-ico.png') }}" alt="" class="img-fluid w-50">
                    </div>
                </div>
                <a href="{{ route('databuku') }}" class="card-footer text-center text-light">More info <i class="bi bi-arrow-right-circle"></i></a>
            </div>
        </div>
        <div class="col-md-3 p-0">
            <div class="card col-md-10 bg-success text-light">
                <div class="row align-items-center">
                    <div class="card-body col-md-6 ps-4">
                        <h3 class="card-title">{{ $petugas }}</h3>
                        <p class="card-text">Petugas</p>
                    </div>
                    <div class="card-icon col-md-6 text-center">
                        <img src="{{ asset('/images/staff.png') }}" alt="" class="img-fluid w-50">
                    </div>
                </div>
                <a href="{{ route('datapetugas') }}" class="card-footer text-center text-light">More info <i class="bi bi-arrow-right-circle"></i></a>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card col-md-10 text-light" style="background-color: purple">
                <div class="row align-items-center">
                    <div class="card-body col-md-6 ps-4">
                        <h3 class="card-title">{{ $user }}</h3>
                        <p class="card-text">User</p>
                    </div>
                    <div class="card-icon col-md-6 text-center">
                        <img src="{{ asset('/images/user.png') }}" alt="" class="img-fluid w-50">
                    </div>
                </div>
                <a href="{{ route('datauser') }}" class="card-footer text-center text-light">More info <i class="bi bi-arrow-right-circle"></i></a>
            </div>
        </div>
    </div>
</div>
@endsection