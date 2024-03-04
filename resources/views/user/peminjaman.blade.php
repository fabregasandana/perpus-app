@extends('admin.dashboard')

@section('data')
    <div class="container-fluid p-0">
        <div class="container-fluid d-flex justify-content-between p-4 align-items-center">
            <h3 class="text-dark fw-bold">Daftar Buku Yang Dipinjam</h3>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-stripped">
                    <tr class="text-center">
                        <th>Cover</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Kategori</th>
                    </tr>
                    @foreach ($buku as $b)
                    <tr class="text-center" style="vertical-align: middle;">
                        <td>
                            <img src="{{ asset('images') }}/{{ $b->gambar }}" alt="" class="img-fluid" style="width: 85px;">
                        </td>
                        <td>{{ $b->judul }}</td>
                        <td>{{ $b->penulis }}</td>
                        <td>{{ $b->penerbit }}</td>
                        <td>{{ $b->tahunterbit }}</td>
                        <td>{{ $b->kategori }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection