@extends('admin.dashboard')

@section('data')
    <div class="container-fluid p-0">
        <div class="container-fluid d-flex justify-content-between p-4 align-items-center">
            <h3 class="text-dark fw-bold">Data Peminjaman</h3>
            <button id="cetak" class="btn rounded-pill" style="background-color: #99DCED;">Cetak Data</button>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-stripped">
                    <tr class="text-center">
                        <th>Nama</th>
                        <th>Buku</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($dtpeminjam as $p)
                    <tr class="text-center" style="vertical-align: middle;">
                        <td>{{ $p->user['name'] }}</td>
                        <td>{{ $p->buku['judul'] }}</td>
                        <td>{{ $p->tanggalpeminjaman }}</td>
                        <td>{{ $p->tanggalpengembalian }}</td>
                        <td>{{ $p->status }}</td>
                        <td>
                            @if ($p->status != 'Dikembalikan')
                            <div class="d-flex flex-row justify-content-center">
                                <a href="/pengembalianbuku/{{ $p->peminjamanID }}"><i class="bi bi-pencil text-dark"></i></a>
                            </div>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection