
@extends('layouts.app')

@section('content')

    <!-- breadcrumb start -->
    <section class="breadcrumb-section p-0">
        <img src="../../../assets/images/inner-background.jpg" class="bg-img img-fluid" alt="">
        <div class="container">
            <div class="breadcrumb-content">
                <div>
                    <h2>Dashboard</h2>
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">My profile</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- user dashboard section start -->
    <section class="user-dashboard small-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        @include('layouts.admin-nav')
                    </div>
                    <div class="col-lg-9">
                        <div class="dashboard-content">
                            <div class="my-profile" id="profile">
                                <div class="profile-info">
                                    <div class="common-card">
                                        <div class="user-name media">
                                            <div class="media-body">
                                                <h5>{{ $users->lastname.' '.$users->firstname }}
                                                
                                                    @if (!isset($users->agent_status) || $users->agent_status == 'no' )
                                                    <span class="label label-success">
                                                        A Customer
                                                    </span>
                                                    @else
                                                    <span class="label label-success">
                                                        Real estate agent
                                                    </span>   
                                                    @endif
                                                
                                            </h5>
                                                <div class="rating">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="far fa-star"></i>
                                                </div>
                                            </div>
                                            <a class="label label-light label-flat color-4" href="{{ $users->id }}/edit"> Edit</a>
                                            {{-- <span data-bs-toggle="modal" data-bs-target="#edit-profile" class="label label-light label-flat color-4">Edit</span> --}}
                                        </div>
                                        <ul class="user-detail">
                                            <li>
                                                <i data-feather="map-pin"></i>
                                                <span>{{ $users->address }}</span>
                                            </li>
                                            <li>
                                                <i data-feather="mail"></i>
                                                <span>{{ $users->email }}</span>
                                            </li>
                                            <li>
                                                <i data-feather="check-square"></i>

                                                @if ($users->license_year != "" ||$users->license_year != 0 )
                                                <span>Licensed for {{ now()->year - $users->license_year }} years</span>
                                                @else
                                                    <span>License year : None</span>
                                                @endif
                                                
                                            </li>
                                        </ul>
                                        <p class="font-roboto">{{ $users->about_status }}</p>
                                    </div>
                                    <div class="common-card">
                                        <div class="row">
                                            <div class="col-xxl-6 col-xl-7">
                                                <div class="information-detail">
                                                    <div class="common-header">
                                                        <h5>About</h5>
                                                    </div>
                                                    <div class="information">
                                                        <ul>
                                                            <li>
                                                                <span>Gender :</span>
                                                                <p>{{ $users->gender }}</p>
                                                            </li>
                                                            <li>
                                                                <span>Birthday :</span>
                                                                <p>{{ $users->birthday }}</p>
                                                            </li>
                                                            <li>
                                                                <span>Phone number :</span>
                                                                <a href="javascript:void(0)">
                                                                    {{ $users->phone_number }}
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <span>Address :</span>
                                                                <p>{{ $users->address }}</p>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                                <div class="information-detail">
                                                    <div class="common-header">
                                                        <h5>Login Details</h5>
                                                    </div>
                                                    <div class="information">
                                                        <ul>
                                                            <li>
                                                                <span>Email :</span>
                                                                <a href="javascript:void(0)">{{ $users->email }}</a>
                                                            </li>
                                                            <li>
                                                                <span>Password :</span>
                                                                <a href="javascript:void(0)">&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-5 offset-xxl-1 col-xl-5 offset-xl-0">
                                                <div class="about-img d-xl-block d-none">
                                                    <img src="../../../assets/images/inner-pages/2.png" class="img-fluid" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- user dashboard section end -->

    @endsection
