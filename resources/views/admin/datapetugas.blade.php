@extends('admin.dashboard')

@section('data')
    <div class="container-fluid p-0">
        <div class="container-fluid d-flex justify-content-between p-4 align-items-center">
            <a href="/dashboard"><i class="bi bi-arrow-left"></i>Back</a>
            <h3 class="text-dark fw-bold">Data Petugas</h3>
            <a href="{{ route('addpetugas') }}" class="btn" style="background-color: #99DCED;"><i class="bi bi-plus-lg text-dark fs-4"></i></a>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-stripped">
                    <tr class="text-center">
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Posisi</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($petugas as $p)
                    <tr class="text-center" style="vertical-align: middle;">
                        <td>{{ $p->name }}</td>
                        <td>{{ $p->username }}</td>
                        <td>{{ $p->email }}</td>
                        <td>{{ $p->role }}</td>
                        <td>
                            <div class="d-flex flex-row justify-content-center">
                                <a href="/editpetugas/{{ $p->id }}"><i class="bi bi-pencil text-dark"></i></a>
                                <form action="/delete/petugas/{{ $p->id }}" method="post" class="delete-form">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="bg-transparent border-0">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection