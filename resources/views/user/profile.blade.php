@extends('admin.dashboard')

@section('card')
    <div class="container-fluid">
        <h1 class="mt-5">Hallo, {{Auth::user()->name}} </h1>
        <div class="row align-items-center justify-content-center" style="height: 90vh;">
            <div class="col-lg-4    ">
                <div class="card">
                    <div class="card-body">
                        <div class="">
                            <p>ID User: {{Auth::user()->id}} </p>
                            <p>Nama Lengkap: {{Auth::user()->name}} </p>
                            <p>Username: {{Auth::user()->username}} </p>
                            <p>Email: {{Auth::user()->email}} </p>
                            <p>Alamat: {{Auth::user()->alamat}} </p>
                        </div>
                        <div class="">
                            <a href="/profile/edit/{{Auth::user()->id}}" class="btn btn-primary">
                                Edit
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection