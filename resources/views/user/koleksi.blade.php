@extends('admin.dashboard')

@section('catalog')
    <div class="container-fluid mt-5">
        @foreach ($koleksi as $k)
            <h5 style="font-family: 'Dela Gothic One'">{{ $k->user['name'] }}'s <br> Collections</h5>
        @endforeach
        <div class="row gap-5">
            @foreach ($koleksi as $k)
            <div class="col-md-2 d-flex justify-content-center">
                <div class="card col-md-12 d-flex align-items-center">
                    <div class="card-img text-center">
                        <img src="{{ asset('/images')}}/{{ $k->buku['gambar'] }}" alt="" class="img-fluid">
                    </div>
                    <div class="card-body text-center p-0">
                        <p class="card-title">{{ $k->buku['judul'] }}</p>
                        <p class="card-title">{{ $k->buku['penulis'] }}</p>
                    </div>
                    <div class="card-body d-flex flex-row gap-5 justify-content-md-center">
                        <a href="/buku/peminjaman/{{ $k->bukuID }}" role="button" class="btn btn-success col-md-6">Borrow</a>
                        <a href="/buku/{{ $k->bukuID }}" role="button" class="btn btn-outline-primary col-md-6">Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection