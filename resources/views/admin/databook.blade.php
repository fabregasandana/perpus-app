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
                        <th>Cover</th>
                        <th>Judul</th>
                        <th>Penulis</th>
                        <th>Penerbit</th>
                        <th>Tahun Terbit</th>
                        <th>Kategori</th>
                        <th>Action</th>
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
                        <td>
                            <div class="d-flex flex-row justify-content-center">
                                <a href="/editbuku/{{ $b->bukuID }}"><i class="bi bi-pencil text-dark"></i></a>
                                <form action="/delete/{{ $b->bukuID }}" method="post" class="delete-form">
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