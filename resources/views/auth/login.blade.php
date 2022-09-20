

@extends('layouts.app')

@section('content')
     <!-- breadcrumb start -->
     <section class="breadcrumb-section p-0">
        <img src="../assets/images/inner-background.jpg" class="bg-img img-fluid" alt="">
        <div class="container">
            <div class="breadcrumb-content">
                <div>
                    <h2>{{ __('Login') }}</h2>
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                           
                            <li class="breadcrumb-item active" aria-current="page">Log in</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- section start -->
    <section class="login-wrap">
        <div class="container">
            <div class="row log-in">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 col-12">
                    <div class="theme-card">
                    <div class="title-3 text-start">
                        <h2>Log in</h2>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i data-feather="user"></i>
                                    </div>
                                </div>
                                <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i data-feather="lock"></i>
                                    </div>
                                </div>
                
                                    <input placeholder="Password" id="pwd-input" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                <div class="input-group-apend">
                                    <div class="input-group-text">
                                        <i id="pwd-icon" class="far fa-eye-slash"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="d-flex">
                            <label class="d-block mb-0" for="remember">
                                <input class="checkbox_animated color-2"  name="remember" id="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}> <span>Remember me</span>
                            </label>
                            @if (Route::has('password.request'))
                        <a class="btn btn-link font-rubik text-color-2" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                            {{-- <a href="forgot-password.html" class="font-rubik text-color-2">Forgot password ?</a> --}}
                        </div>
                        <div>
                            <button type="submit" class="btn btn-gradient btn-pill color-2 me-sm-3 me-2">Log in</button>
                            <a href="{{ route('register') }}" class="btn btn-dashed btn-pill color-2">Create Account</a>
                        </div>
                        <div class="divider">
                            <h6>or</h6>
                        </div>
                        
                    </form>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->
    <!-- login js -->
    {{-- <script src="../assets/js/login.js"></script> --}}
    <script src="{{ asset('assets/js/login.js') }}"></script>

@endsection
 