@extends('layouts.app')

@section('content')
      <!-- breadcrumb start -->
      <section class="breadcrumb-section p-0">
        <img src="../assets/images/inner-background.jpg" class="bg-img img-fluid" alt="">
        <div class="container">
            <div class="breadcrumb-content">
                <div>
                    <h2>Sign up</h2>
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">Sign up</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- section start -->
    <section>
        <div class="container">
            <div class="row log-in sign-up">                
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 col-12">
                    <div class="theme-card">
                        <div class="title-3 text-start">
                            <h2>{{ __('Register') }}</h2>
                        </div>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i data-feather="user"></i>
                                        </div>
                                    </div>
                                    <input placeholder="Name" id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
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
                                            <i data-feather="mail"></i>
                                        </div>
                                    </div>
                                    <input placeholder="Email" id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                    <input placeholder="Password" id="pwd-input" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

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

                            <div class="form-group">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <i data-feather="lock"></i>
                                        </div>
                                    </div>
                                    <input placeholder="Confirm Password"  id="pwd-input" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">

                                    <div class="input-group-apend">
                                        <div class="input-group-text">
                                            <i id="pwd-icon" class="far fa-eye-slash"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="important-note">
                                    password should be a minimum of 8 characters
                                </div>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-gradient btn-pill color-2 me-sm-3 me-2">Create Account</button>
                                <a href="{{ route('login') }}" class="btn btn-dashed btn-pill color-2">Log in</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->
    <script src="{{ asset('assets/js/login.js') }}"></script>

@endsection

  