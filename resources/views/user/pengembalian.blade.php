@extends('admin.dashboard')

@section('create')
    <div class="container p-0">
        <div class="row justify-content-start">
            <div class="col-md-6">
                <div class="card border-0">
                    <div class="title text-center col-md-10">
                        <h4>Input Data Petugas</h4>
                    </div>
                    <form action="/buku/proses/peminjaman/{{ $buku->bukuID }}" method="POST">
                        @csrf
                        <div class="col-md-10 form-group p-3">
                            <label for="tglbalik">Tanggal Pengembalian</label>
                            <input id="tglbalik" type="date" class="form-control" name="tglbalik">
                        </div>

                        <div class="form-group ps-3 d-flex gap-3 col-md-9">
                            <button type="submit" class="btn btn-primary col-md-12">
                                {{ __('Submit') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection