@extends('layouts.register')

@section('content')
<div class="container d-flex flex-column justify-content-center">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="card">
                <div class="pt-3 text-center">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3 justify-content-center">

                            <div class="col-md-9">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Username">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">

                            <div class="col-md-9">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">

                            <div class="col-md-9">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">

                            <div class="col-md-9">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Confirm Password">
                            </div>
                        </div>

                        <div class="row mb-0 justify-content-center">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-primary col-md-12">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>

                        <div class="row mb-0 mt-3 justify-content-center">
                            <div class="col-md-6 text-end p-0">
                                <a href="{{ route('login') }}" style="text-decoration: none;" class="text-dark btn col-md-6">Login</a>
                            </div>
                            <div class="col-md-6 text-start p-0">
                                <a href="{{ route('register') }}" style="text-decoration: none;" class="text-dark btn col-md-6 a-2">Register</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6 text-end">
            <img src="{{ asset('/images/buku.png') }}" alt="" class="img-fluid">
        </div>
    </div>
</div>
@endsection
