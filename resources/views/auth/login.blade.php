@extends('layouts.main')
@section('content')

<!-- Breadcrumb Area Start Here -->
<div class="breadcrumbs-area position-relative">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <div class="breadcrumb-content position-relative section-content">
                    <h3 class="title-3">Login-Register</h3>
                    <ul>
                        <li><a href="{{ ('/') }}">Home</a></li>
                        <li>Login-Register</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Area End Here -->
<!-- Login Area Start Here -->
<div class="login-register-area mt-no-text">
    <div class="container custom-area">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-custom">
                <div class="login-register-wrapper">
                    <div class="section-content text-center mb-5">
                        <h2 class="title-4 mb-2">Login</h2>
                        <p class="desc-content">Please login using account detail bellow.</p>
                    </div>
                    <form method="POST" action="{{route('login')}}">
                        @csrf
                        <div class="single-input-item mb-3">

                            <input  placeholder="Email or Username" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="single-input-item mb-3">

                            <input placeholder="Enter your Password" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="single-input-item mb-3">
                            <div class="login-reg-form-meta d-flex align-items-center justify-content-between">
                                <div class="remember-meta mb-3">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="custom-control-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>



                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link forget-pwd mb-3" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif

                            </div>
                        </div>

                        <div class="single-input-item mb-3">
                            <button type="submit" class="btn flosun-button secondary-btn theme-color rounded-0"> {{ __('Login') }}</button>
                        </div>
                        <div class="single-input-item text-center">
                            <a href="">Create New Account</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Login Area End Here -->

@endsection
