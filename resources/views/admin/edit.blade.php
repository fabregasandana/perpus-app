@extends('admin.dashboard')

@section('create')
    <div class="container p-0">
        <div class="row justify-content-start">
            <div class="col-md-6">
                <div class="card border-0">
                    <div class="title text-center col-md-10">
                        <h4>Input Data Buku</h4>
                    </div>
                    <form action="/proseseditdata/{{ $buku->bukuID }}" method="post">
                        @csrf
                        @method("PUT")
                        <div class="col-md-10 form-group p-3">
                            <label for="judul">Judul</label>
                            <input type="text" value="{{ $buku->judul }}" name="judul" class="form-control">
                        </div>
                        
                        <div class="col-md-10 form-group p-3">
                            <label for="penulis">Penulis</label>
                            <input type="text" value="{{ $buku->penulis }}" name="penulis" class="form-control">
                        </div>
                        
                        <div class="col-md-10 form-group p-3">
                            <label for="penerbit">Penerbit</label>
                            <input type="text" value="{{ $buku->penerbit }}" name="penerbit" class="form-control">
                        </div>
                        
                        <div class="col-md-10 form-group p-3">
                            <label for="tahunterbit">Tahun Terbit</label>
                            <input type="text" value="{{ $buku->tahunterbit }}" name="thn" class="form-control">
                        </div>

                        <div class="col-md-10 form-group p-3">
                            <label for="deskripsi">Deskripsi</label>
                            <textarea name="deskripsi" class="form-control">{{ $buku->deskripsi }}</textarea>
                        </div>

                        <div class="col-md-10 form-group p-3">
                            <label for="gambar">Gambar</label>
                            <input type="file" value="{{ $buku->gambar }}" name="gambar" class="form-control">
                        </div>

                        <div class="form-group ps-3 d-flex gap-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-danger">Reset</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection