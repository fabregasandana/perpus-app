@extends('layouts.login')

@section('content')
<div class="container d-flex flex-column justify-content-center">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-6">
            <div class="card">
                <div class="text-center pt-3">{{ __('Sign In') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-9">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-9">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0 justify-content-center">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-primary col-md-12 rounded-pill">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>

                        <div class="row mb-3 justify-content-center">
                            <div class="col-md-9">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link active" href="{{ route('password.request') }}" style="text-decoration: none;">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-0 mt-3 justify-content-center">
                            <div class="col-md-6 text-end p-0">
                                <a href="{{ route('login') }}" style="text-decoration: none;" class="btn text-dark a-1 col-md-6">Login</a>
                            </div>
                            <div class="col-md-6 text-start p-0">
                                <a href="{{ route('register') }}" style="text-decoration: none;" class="btn text-dark a-2 col-md-6">Register</a>
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
