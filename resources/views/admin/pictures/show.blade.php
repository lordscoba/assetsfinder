
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
                            <li class="breadcrumb-item active" aria-current="page">Property Pictures</li>
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
                                              
                                              <div> {{ $property->property_type }}</div>    
                                            </div>
                                            
                                            {{-- <a class="label label-light label-flat color-4" href="{{ $property->id }}/edit"> Edit</a> --}}
                                            {{-- <span data-bs-toggle="modal" data-bs-target="#edit-profile" class="label label-light label-flat color-4">Edit</span> --}}
                                            <a class="btn btn-info btn-lg" href="{{ $property->id }}/edit">Add Picture</a> 
                                        </div>

                                    </div>
                                    <div class="common-card">
                                        <div class="row">


                                            <div class="col-xxl-11 col-xl-11">
                                          
                                                @foreach (DB::table('pictures')->where('properties_id', $property->id)->get() as $picture)
             {{-- <img src="{{ URL('images/'.$picture->image_path) }}" class="bg-img" alt=""> --}}
                                                <div class="col-md-12">
                                                    <div class="property-box">
                                                        <div class="property-image">
                                                            <div class="property-slider">
                                                                <a href="javascript:void(0)">
                                                                    <img src="{{ URL::asset('images/'.$picture->image_path) }}" style="width:200px"  alt="">
                                                                    
                                                                </a>
                                                              
                                                            </div>
                                                        </div>
                        
                                                        <div class="property-details">
                                                            <a href="single-property-8.html">
                                                                <h3>{{ $picture->picture_name }}</h3>
                                                            </a>
                                                            <p class="font-roboto">{{ $picture->created_at }}</p>
                                                            
                                                            <div class="property-btn d-flex">
                                                                {{-- <a href="users/{{ $property->id }}/edit" class="btn btn-dashed btn-pill color-2 float-left">Edit</a> --}}
                                                            <form action="/admin/pictures/{{ $picture->id }}" class="pt-0" method="POST">
                                                                    @csrf
                                                                    @method('delete')
                                                                    <button type="submit" class="btn btn-dashed btn-pill color-2 float-right">Delete Picture</button>
                                                                </form>
                                                                {{-- <a href="/admin/pictures/{{ $property->id }}" class="btn btn-dashed btn-pill color-2 float-right">Edit Pictures</a> --}}
                                                            
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach      
                                               

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
