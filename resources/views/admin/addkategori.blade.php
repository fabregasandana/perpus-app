@extends('admin.dashboard')

@section('create')
<div class="container p-0">
    <div class="row justify-content-start">
        <div class="col-md-6">
            <div class="card border-0">
                <div class="title text-center col-md-10">
                    <h4>Input Data Buku</h4>
                </div>
                <form action="/prosesrelasi" method="post">
                    @csrf
                    <div class="col-md-10 form-group p-3">
                        <label for="buku">Buku</label>
                        <select name="bukuID" id="" class="form-select" aria-label="Deafult select example">
                            <option selected>-- Pilih Buku --</option>
                            @foreach ($buku as $b)
                            <option value="{{ $b->bukuID }}" name="">{{ $b->judul }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-10 form-group p-3">
                        <label for="kategori">Kategori</label>
                        <select name="kategoriID" id="" class="form-select" aria-label="Deafult select example">
                            <option selected>-- Pilih Kategori --</option>
                            @foreach ($kategori as $k)
                            <option value="{{ $k->kategoriID }}" name="">{{ $k->namakategori }}</option>
                            @endforeach
                        </select>
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