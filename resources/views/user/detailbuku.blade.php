@extends('layouts.landing')

@section('detail')
    <div class="container">
        <div class="wrap p-5 mt-5">
            <div class="header d-flex align-items-center gap-3">
                <div class="img col-md-3 text-center">
                    <img src="{{ asset('images') }}/{{ $buku->gambar }}" alt="" class="img-fluid">
                </div>
                <div class="judul col-lg-6" style="line-height: .3; border-bottom: 1px solid black">
                    <div class="detail-book">
                        <h1 class="fw-bold">{{ $buku->judul }}</h1>
                        <p class="">{{ $buku->penulis }}</p>
                        <p class="">{{ $buku->penerbit }}</p>
                        {{-- <p class="">{{ $ulasan->ulasan }}</p> --}}
                    </div>
                    <div class="btn-borrow justify-content-start d-flex">
                        <a href="/buku/peminjaman/{{ $buku->bukuID }}" role="button" class="btn btn-success col-md-2">Borrow</a>
                        <form action="/addkoleksi/{{$buku->bukuID}}" method="post"  >
                            @csrf
                            <button type="submit" class="btn">
                                <i class="bi bi-box2-heart-fill" style=""></i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="detail d-flex gap-5 mt-5">
                <div class="detail-buku col-lg-4">
                    <h3>Book Detail</h3>
                    <p>Judul: {{ $buku->judul }}</p>
                    <p>Penulis: {{ $buku->penulis }}</p>
                    <p>Penerbit: {{ $buku->penerbit }}</p>
                    <p>Tahun Terbit: {{ $buku->tahunterbit }}</p>
                </div>
                <div class="desc">
                    <h3>Description</h3>
                    <p>{{ $buku->deskripsi }}</p>
                </div>
            </div>
            <div class="komentar mt-5">
                <form action="/buku/{{ $buku->bukuID }}/ulasan" method="post">
                    @csrf
                    <div class="kolom-ulasan">
                        <textarea name="komen" id="komen" cols="30" rows="" style="background-color: transparent; border: none; border-bottom: .5px solid black; resize: none;"></textarea>
                    </div>
                    <div class="inp-rating col-lg-2 d-flex">
                        <select name="rating" id="" class="form-select">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                        </select>
                        <button type="submit" class="btn col-lg-6 btn-secondary">Kirim</button>
                    </div>
                </form>
            </div>
            @foreach ($ulasan as $u)
            <div class="resultcomment mt-5 border-top">
                    <h3>{{ $u->user['name'] }}</h3>
                    <p>{{ $u->rating }}/5</p>
                    <p>{{ $u->ulasan }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection