@extends('layouts.landing')

@section('catalog')
    <div class="container-fluid ">
        <div class="row gap-5">
            @foreach ($buku as $b)
            <div class="col-md-2 d-flex justify-content-center">
                <div class="card col-md-11 d-flex align-items-center">
                    <div class="card-img text-center">
                        <img src="{{ asset('/images')}}/{{ $b->gambar }}" alt="" class="img-fluid">
                    </div>
                    <div class="card-body text-center p-0">
                        <p class="card-title">{{ $b->judul }}</p>
                        <p class="card-title">{{ $b->penulis }}</p>
                        {{-- <p class="card-title">{{ $b->rating }}</p> --}}
                    </div>
                    <div class="card-body d-flex flex-row gap-5 justify-content-md-center">
                        <a href="/buku/peminjaman/{{ $b->bukuID }}" role="button" class="btn btn-success col-md-6">Borrow</a>
                        <a href="/buku/{{ $b->bukuID }}" role="button" class="btn btn-outline-primary col-md-6">Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection