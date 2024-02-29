@extends('layouts.landing')

@section('detail')
    <div class="container">
        <div class="wrap d-flex">
            <div class="img col-md-3">
                <img src="{{ asset('images') }}/{{ $buku->gambar }}" alt="" class="img-fluid">
            </div>
            <div class="judul">
                <h1>{{ $buku->judul }}</h1>
            </div>
        </div>
    </div>
@endsection