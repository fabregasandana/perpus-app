@extends('admin.dashboard')

@section('data')
    <div class="container-fluid p-0">
        <div class="container-fluid d-flex justify-content-between p-4 align-items-center">
            <a href="/dashboard"><i class="bi bi-arrow-left"></i>Back</a>
            <h3 class="text-dark fw-bold">Data User</h3>
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
                        <th>Action</th>
                    </tr>
                    @foreach ($user as $u)
                    <tr class="text-center" style="vertical-align: middle;">
                        <td>{{ $u->username }}</td>
                        <td>{{ $u->name }}</td>
                        <td>{{ $u->email }}</td>
                        <td>{{ $u->created_at }}</td>
                        <td>{{ $u->update_at }}</td>
                        <td>
                            <form action="/delete/user/{{ $u->id }}" method="post" class="delete-form">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="bg-transparent border-0">
                                <i class="bi bi-trash"></i>
                            </button>
                        </form>
                    </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection