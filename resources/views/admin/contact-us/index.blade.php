
@extends('layouts.app')
 
@section('content')
       <!-- breadcrumb start -->
       <section class="breadcrumb-section p-0">
        {{-- <img src="../../../assets/images/inner-background.jpg" class="bg-img img-fluid" alt=""> --}}
        <img src="{{ URL('assets/images/inner-background.jpg') }}" class="bg-img img-fluid" alt="">
        <div class="container">
            <div class="breadcrumb-content">
                <div>
                    <h2>Dashboard</h2>
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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
                            <div class="tab-listing" id="listing">
                                <div class="property-section">
                                    <div class="property-grid-2 ratio_63">
                                        <div class="filter-panel">
                                            <div class="top-panel">
                                                <div>
                                                    <h2>Contact Us</h2>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="property-2 row column-sm zoom-gallery property-label property-grid list-view">
                                            @foreach ($contact_us as $contact_us)
                                            <div class="col-md-12">
                                                <div class="property-box">    
                                                    <div class="property-details">
                                                        <span class="">{{ $contact_us->contact_name }}{{ $contact_us->id }}</span>
                                                        <div class="my-listing font-roboto"></div>
                                                        <a href="#">
                                                            <h3>{{ $contact_us->phone_number }}</h3>
                                                        </a>
                                                       
                                                        <p class="font-roboto">{{ $contact_us->body }}</p>

                                                        <strong>Created: {{ $contact_us->created_at }}</strong>
                                                        
                                                        <div class="property-btn d-flex justify-content-between">
                                                            <form action="/admin/contact_us/{{ $contact_us->id }}" class="pt-0" method="POST">
                                                                @csrf
                                                                @method('delete')
                                                                <button 
                                                                    type="submit"
                                                                    class="btn btn-warning btn-dashed btn-pill float-right">
                                                                        Delete
                                                                </button>
                                                            </form>
                                                            {{-- <a href="" class="btn btn-dashed btn-pill color-2 float-right">Delete</a> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            @endforeach
                                            {{-- <div class="float-end d-flex">{{ $contact_us->links() }}</div> --}}
                                            
                            
                                            
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


 