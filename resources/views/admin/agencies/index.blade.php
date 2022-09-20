
@extends('layouts.app')

@section('content')

   <!-- breadcrumb start -->
    <section class="breadcrumb-section p-0">
        <img src="../assets/images/inner-background.jpg" class="bg-img img-fluid" alt="">
        <div class="container">
            <div class="breadcrumb-content">
                <div>
                    <h2>Agency List</h2>
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Agency List</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- agent grid section start -->
    <section class="agent-section  user-dashboard small-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    @include('layouts.admin-nav')
                </div>
                <div class="col-xl-7 col-lg- property-grid-3 agent-grids">
                    <div class="filter-panel">
                        <div class="top-panel">
                            <div>
                                <h2>Agency Listing</h2>
                            </div>
                        </div>
                        <a class="btn btn-primary btn-lg" href="{{ route('agencies.create') }}"> Create Agency</a>
                    </div>
                    <div class="property-wrapper-grid list-view">
                        <div class="property-2 row column-sm property-label property-grid list-view">

                            @foreach ($agencies as $agency)
                            <div class="col-md-12 col-xl-6 wow fadeInUp">
                                <div class="property-box">
                                    <div class="agent-image">
                                        <div>
                                            <img src="{{ URL::asset('images/'.$agency->image_path) }}" class="bg-img" alt="">
                                            {{-- <img src="../assets/images/agency/1.png" class="bg-img" alt=""> --}}
                                            <span class="label label-shadow">2 properties</span>
                                            <div class="agent-overlay"></div>
                                            <div class="overlay-content">
                                                <ul>

                                                    <li><a href="{{ $agency->twitter_link }}"><img src="../assets/images/about/icon-2.png" alt=""></a>
                                                    </li>
                                                    <li><a href="{{ $agency->facebook_link }}"><img src="../assets/images/about/icon-3.png" alt=""></a>
                                                    </li>
                                                </ul>
                                                <span>Connect</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="agent-content">
                                        <h3><a href="agency-profile.html">{{ $agency->name }}</a></h3>
                                        <p class="font-roboto">Real estate Agency</p>
                                        <ul class="agent-contact">
                                            <li>
                                                <i class="fas fa-phone-alt"></i>
                                                <span class="phone-number">{{ $agency->phone_number }}</span>
                                                {{-- <span class="character">+91 42601****</span> --}}
                                                <span class="character">{{\Illuminate\Support\Str::limit($agency->phone_number, 5)}}  </span>
                                                <span class="label label-light label-flat color-2">
                                                    show
                                                    <span>hide</span>
                                                </span>
                                            </li>
                                            <li><i class="fas fa-envelope"></i> {{ $agency->email }}</li>
                                            <li><i class="fas fa-fax"></i> 247 054 787</li>
                                        </ul>
                                        <a href="/admin/agencies/{{ $agency->id }}">View profile <i class="fas fa-arrow-right"></i></a>
                                        <a href="agencies/{{ $agency->id }}/edit">Edit profile <i class="fas fa-arrow-right"></i></a>
                                        <form action="/admin/agencies/{{ $agency->id }}" class="pt-0" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-dashed btn-pill color-2 float-right">Delete Agency</button>
                                        </form>
                                        {{-- <a href="/admin/agencies/{{ $agency->id }}">Delete profile <i class="fas fa-arrow-right"></i></a> --}}
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- agent grid section end -->

    @endsection
