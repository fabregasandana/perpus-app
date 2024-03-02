@extends('layouts.landing')

@section('detail')
    <div class="container">
        <div class="wrap">
            <div class="img col-md-3">
                <img src="{{ asset('images') }}/{{ $buku->gambar }}" alt="" class="img-fluid">
            </div>
            <div class="judul">
                <h1>{{ $buku->judul }}</h1>
            </div>
            <div class="komentar">
                <form action="/buku/{{ $buku->bukuID }}/ulasan" method="post">
                    @csrf
                    <textarea name="komen" id="komen" cols="30" rows="10"></textarea>
                    <select name="rating" id="">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                    <button type="submit">Kirim</button>
                </form>
            </div>
            @foreach ($ulasan as $u)
            <div class="resultcomment">
                    <h1>{{ $u->user['name'] }}</h1>
                    <p>{{ $u->ulasan }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection