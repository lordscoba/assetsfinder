<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
<meta name="csrf-token" content="{{ csrf_token() }}">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="Assets Finder">
<meta name="keywords" content="AssetsFinder">
<meta name="author" content="AssetsFinder">
<link rel="icon" href="{{ asset('assets/img/asset-logo-fav.png') }}" type="image/x-icon" />
<title>Assets Finder</title>

<!--Google font-->
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,500,500i,600,600i,700,700i,800,800i"
    rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i&display=swap"
    rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i" rel="stylesheet">

<!-- animate css -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/animate.css') }}">
{{-- <link rel="stylesheet" type="text/css" href="../assets/css/animate.css"> --}}
<!-- Template css -->
{{-- <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.css"> --}}
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.css') }}">
{{-- <link rel="stylesheet" type="text/css" href="../assets/css/color1.css"> --}}
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/color1.css') }}">
</head>

<body>

<!-- Loader start -->
<div class="loader-wrapper">
    <div class="row loader-img">
        <div class="col-12">
            {{-- <img src="../assets/images/loader/loader-2.gif" class="img-fluid" alt=""> --}}
            <img src=".{{ asset('assets/images/loader/loader-2.gif') }}" class="img-fluid" alt="">
        </div>
    </div>
</div>
<!-- Loader end -->

<!-- header start -->
<header class="inner-page">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="menu">
                    <div class="brand-logo">
                        <a href="/">
                            {{-- <img src="../assets/images/logo/2.png" alt="" class="img-fluid"> --}}
                            <img style="width:150px" src="{{ asset('assets/img/asset-logo-side.png') }}" alt="" class="img-fluid">
                        </a>
                    </div>
                    <nav>
                        <div class="main-navbar">
                            <div id="mainnav">
                                <div class="toggle-nav"><i class="fa fa-bars sidebar-bar"></i></div>
                                <ul class="nav-menu">
                                    <li class="back-btn">
                                        <div class="mobile-back text-end">
                                            <span>Back</span>
                                            <i aria-hidden="true" class="fa fa-angle-right ps-2"></i>
                                        </div>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ route('landing') }}" class="nav-link menu-title">Home</a>
                                        
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ route('about-us') }}" class="nav-link menu-title">About Us</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ route('contact-us') }}" class="nav-link menu-title">Contact</a>
                                        
                                    </li>
                                    <li class="mega-menu">
                                        <a href="{{ route('services') }}" class="nav-link menu-title">
                                            Services
                                        </a>
                                        
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ route('faq') }}" class="nav-link menu-title">F.A.Q</a>
                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ route('agent-list') }}" class="nav-link menu-title">Agent</a>

                                    </li>
                                    <li class="dropdown">
                                        <a href="{{ route('agency-list') }}" class="nav-link menu-title">Agency</a>

                                    </li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                    <ul class="header-right">
                        <li class="right-menu">
                            <ul class="nav-menu">
                                      <!-- Authentication Links -->
                        @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                        @endif

                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i data-feather="user" class=""></i>
                                 {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                @if (Auth::user()->email == "admin@assetsfinder.com")
                                <a class="dropdown-item" href="{{ route('super.admin.home') }}"><strong class="text-dark">Dashboard</strong></a>    
                                @elseif (Auth::user()->email == "manager@assetsfinder.com")
                                <a class="dropdown-item" href="{{ route('manger.home') }}"><strong class="text-dark">Dashboard</strong></a>
                                @else
                                <a class="dropdown-item" href="{{ route('home') }}"><strong class="text-dark">Dashboard</strong></a>
                                @endif
                                
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                             <strong class="text-dark">{{ __('Logout') }}</strong>    
    
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                                {{-- <li class="dropdown">
                                    <a href="javascript:void(0)">
                                        
                                    </a>
                                    <ul class="nav-submenu">
                                        <li><a href="javascript:void(0)">Dollar</a></li>
                                        
                                    </ul>
                                </li> --}}
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!--  header end -->