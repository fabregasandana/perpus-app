@extends('admin.dashboard')

@section('data')
    <div class="container-fluid p-0">
        <div class="container-fluid d-flex justify-content-between p-4 align-items-center">
            <h3 class="text-dark fw-bold">Data Buku</h3>
            <a href="{{ route('tambahbuku') }}" class="btn" style="background-color: #99DCED;"><i class="bi bi-plus-lg text-dark fs-4"></i></a>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-stripped">
                    <tr class="text-center">
                        <th>Username</th>
                        <th>Nama Lengkap</th>
                        <th>Email</th>
                        <th>Tgl Daftar Akun</th>
                        <th>Tgl Akun Diubah</th>
                    </tr>
                    @foreach ($user as $u)
                    <tr class="text-center" style="vertical-align: middle;">
                        <td>{{ $u->name }}</td>
                        <td>{{ $u->email }}</td>
                        <td>{{ $u->created_at }}</td>
                        <td>{{ $u->update_at }}</td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection