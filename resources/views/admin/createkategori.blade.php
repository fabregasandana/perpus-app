@extends('admin.dashboard')

@section('create')
<div class="container p-0">
    <div class="row justify-content-start">
        <div class="col-md-6">
            <div class="card border-0">
                <div class="title text-center col-md-10">
                    <h4>Input Kategori</h4>
                </div>
                <form action="/prosesaddkategori" method="post">
                    @csrf
                    <div class="col-md-10 form-group p-3">
                        <label for="buku">Masukkan Kategori</label>
                        <input type="text" name="namakategori" class="form-control" id="" placeholder="Masukkan Kategori" required >
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