
@extends('layouts.app')

@section('content')
       <!-- breadcrumb start -->
       <section class="breadcrumb-section p-0">
        <img src="../assets/images/inner-background.jpg" class="bg-img img-fluid" alt="">
        <div class="container">
            <div class="breadcrumb-content">
                <div>
                    <h2>Dashboard</h2>
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">My listing</li>
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
                    @include('layouts.dashboard-nav')
                    <div class="col-lg-9">
                        <div class="dashboard-content">
                            <div class="tab-listing" id="listing">
                                <div class="property-section">
                                    <div class="property-grid-2 ratio_63">
                                        <div class="filter-panel">
                                            <div class="top-panel">
                                                <div>
                                                    <h2>My Listing</h2>  <span class="label label-flat color-4" > <a class="btn btn-primary" href="{{ route('user-properties.create') }}">Create My Property</a></span>   
                                                </div>
                                            </div>
                                        </div>
                                        <div class="property-2 row column-sm zoom-gallery property-label property-grid list-view">
                                            @forelse ($properties as $property)
                                            <div class="col-md-12">
                                                <div class="property-box">
                                                    <div class="property-image">
                                                        <div class="property-slider">

                                                            @forelse (DB::table('pictures')->where('properties_id', $property->id)->get() as $picture)
                                                            <a href="javascript:void(0)">
                                                                <img src="{{ URL::asset('images/'.$picture->image_path) }}" class="bg-img"  alt="">
                                                                
                                                            </a>
                                                            @empty
                                                            <a href="javascript:void(0)">
                                                                <img src="../assets/images/property/10.jpg" class="bg-img" alt="">
                                                            </a> 
                                                            @endforelse
                                                        </div>
                                                        <div class="labels-left">
                                                            <div>
                                                                <span class="label label-shadow">{{ $property->property_status }}</span>
                                                            </div>
                                                        </div>
                                                        <div class="seen-data">
                                                            <i data-feather="camera"></i>
                                                            <span>{{ DB::table('pictures')->where('properties_id', $property->id)->count() }}</span>
                                                        </div>                 
                                                        
                                                    </div>
                    
                                                    <div class="property-details">
                                                        <span class="font-roboto">{{ $property->country }}</span>
                                                        <div class="my-listing font-roboto">{{ $property->created_at }}</div>
                                                        <a href="single-property-8.html">
                                                            <h3>{{ $property->property_type }}</h3>
                                                        </a>
                                                        <h6>${{ $property->property_price }}.00*</h6>
                                                        <p class="font-roboto">Elegant retreat in a quiet Coral Gables setting. This home provides wonderful entertaining spaces with a chef
                                                            kitchen opening…</p>
                                                        <ul>
                                                            <li><img src="../assets/images/svg/icon/double-bed.svg" class="img-fluid" alt="">Bed : {{ $property->beds }}</li>
                                                            <li><img src="../assets/images/svg/icon/bathroom.svg" class="img-fluid" alt="">Baths : {{ $property->bathrooms }}</li>
                                                            <li><img src="../assets/images/svg/icon/square-ruler-tool.svg" class="img-fluid ruler-tool" alt="">Sq Ft : {{ $property->area }}</li>
                                                        </ul>
                                                        <div class="property-btn d-flex">
                                                            {{-- <span>{{ $property->created_at }}</span> --}}
                                                            <a href="user-properties/{{ $property->id }}/edit" class="btn btn-dashed btn-pill color-2 float-left">Edit</a>
                                                            <form action="user-properties/{{ $property->id }}" class="pt-0" method="POST">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="btn btn-dashed btn-pill color-2 float-right">Delete</button>
                                                            </form>
                                                            <a href="/dashboard/user-properties/{{ $property->id }}" class="btn btn-dashed btn-pill color-2 float-right">Details</a>
                                                            {{-- <button type="button"  onclick="document.location='single-property-8.html'" class="btn btn-dashed btn-pill color-2">Details</button> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>        
                                            @empty
                                             <strong>No properties available, Click on create property if you have any property for sale.</strong>   
                                            @endforelse
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


 