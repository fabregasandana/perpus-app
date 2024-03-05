@extends('admin.dashboard')

@section('kategori')
    <div class="container-fluid mt-5">
        <h1>Kategori Buku</h1>
        <div class="row col-md-12 gap-3 mt-5 justify-content-center">
            @foreach ($kategori as $k)
                <a href="/kategori/{{ $k->kategoriID }}" class="btn col-md-2 text-center rounded-pill text-dark" role="button" style="background-color: #eaeaea; text-decoration: none;">{{ $k->namakategori }}</a>
            @endforeach
            <a href="/createkategori" class="btn col-md-2 text-center rounded-pill text-dark" role="button" style="background-color: #99DCED; text-decoration: none;">+ Tambah Kategori</a>
        </div>
    </div>
@endsection