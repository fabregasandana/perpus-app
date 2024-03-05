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
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Status</th>
                    </tr>
                    @foreach ($daftar as $d)
                    <tr class="text-center" style="vertical-align: middle;">
                        <td>
                            <img src="{{ asset('images') }}/{{ $d->buku['gambar'] }}" alt="" class="img-fluid" style="width: 85px;">
                        </td>
                        <td>{{ $d->buku['judul'] }}</td>
                        <td>{{ $d->tanggalpeminjaman }}</td>
                        <td>{{ $d->tanggalpengembalian }}</td>
                        <td>{{ $d->status }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection