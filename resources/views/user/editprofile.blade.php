@extends('layouts.landing')

@section('create')
<div class="container p-0">
    <div class="row justify-content-center align-items-center" style="height: 90vh">
        <div class="col-md-6">
            <div class="card border-0">
                <div class="title text-center col-md-10">
                    <h4>Edit Profile</h4>
                </div>
                <form action="/profile/edit/proses/{{Auth::user()->id}}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="col-md-10 form-group p-3">
                        <label for="name">Nama Lengkap</label>
                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name }}" required autocomplete="name" autofocus placeholder="Username">

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="col-md-10 form-group p-3">
                        <label for="">Username</label>
                        <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ Auth::user()->username }}" required autocomplete="username" autofocus placeholder="Username">

                        @error('username')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    
                    <div class="col-md-10 form-group p-3">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" required autocomplete="email" placeholder="Email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                    </div>

                    <div class="col-md-10 form-group p-3">

                        <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ Auth::user()->alamat }}" required autocomplete="alamat" placeholder="Alamat">

                        @error('alamat')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-10">
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