@extends('admin.dashboard')

@section('create')
    <div class="container p-0">
        <div class="row justify-content-start">
            <div class="col-md-6">
                <div class="card border-0">
                    <div class="title text-center col-md-10">
                        <h4>Input Data Petugas</h4>
                    </div>
                    <form action="{{ route('prosesaddpetugas') }}" method="POST">
                        @csrf
                        <div class="col-md-10 form-group p-3">
                            <label for="name">Nama Lengkap</label>
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Username">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="col-md-10 form-group p-3">
                            <label for="">Username</label>
                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus placeholder="Username">

                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="col-md-10 form-group p-3">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        
                        <div class="col-md-10 form-group p-3">
                            <label for="alamat">Alamat</label>
                            <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" value="{{ old('alamat') }}" required autocomplete="alamat" placeholder="Alamat">

                            @error('alamat')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        
                        <div class="col-md-10 form-group p-3">
                            <label for="password">Password</label>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        
                        <div class="col-md-10 form-group p-3">
                            <label for="confirmpassword">Konfirmasi Password</label>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                        </div>

                        <div class="col-md-10 form-group p-3">
                            <select name="role" id="" class="form-select" aria-label="Deafult select example">
                                <option selected>-- Pilih Role --</option>
                                <option value="petugas" name="">Petugas</option>
                            </select>
                        </div>

                        <div class="form-group ps-3 d-flex gap-3 col-md-9">
                            <button type="submit" class="btn btn-primary col-md-12">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection