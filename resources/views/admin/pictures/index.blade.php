
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
                            <li class="breadcrumb-item active" aria-current="page">Pictures</li>
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
                                                    <h2>Pictures</h2>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="property-2 row column-sm zoom-gallery property-label property-grid list-view">

                                            @foreach ($properties as $property)
                                            <div class="col-md-12">
                                                <div class="property-box">
                                                    <div class="property-image">
                                                        <div class="property-slider">

                                                            @forelse (DB::table('pictures')->where('properties_id', $property->id)->get() as $picture)
                                                            <a href="javascript:void(0)">
                                                                <img src="{{ URL::asset('images/'.$picture->image_path) }}" class="bg-img" alt="">

                                                            </a>
                                                            @empty
                                                            <a href="javascript:void(0)">
                                                                <img src="../assets/images/property/4.jpg" class="bg-img" alt="">

                                                            </a>
                                                            @endforelse
                                                        </div>
                                                        <div class="labels-left">
                                                            <div>
                                                                <span class="label label-shadow">{{ $property->property_status }}</span>
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="property-details">
                                                        <span class="font-roboto">{{ $property->country }}</span>
                                                        <div class="my-listing font-roboto">{{ $property->created_at }}</div>
                                                        <a href="single-property-8.html">
                                                            <h3>{{ $property->property_type }}</h3>
                                                        </a>
                                                        <h6>${{ $property->property_price }}.00*</h6>
                                                        <ul>
                                                            <li><img src="../assets/images/svg/icon/double-bed.svg" class="img-fluid" alt="">Bed : {{ $property->beds }}</li>
                                                            <li><img src="../assets/images/svg/icon/bathroom.svg" class="img-fluid" alt="">Baths : {{ $property->bathrooms }}</li>
                                                            <li><img src="../assets/images/svg/icon/square-ruler-tool.svg" class="img-fluid ruler-tool" alt="">Sq Ft : {{ $property->area }}</li>
                                                        </ul>
                                                        <div class="property-btn d-flex">
                                                            {{-- <a href="users/{{ $property->id }}/edit" class="btn btn-dashed btn-pill color-2 float-left">Edit</a> --}}
                                                            {{-- <form action="/admin/properties/{{ $property->id }}" class="pt-0" method="POST">
                                                                @csrf
                                                                @method('delete')
                                                                <button type="submit" class="btn btn-dashed btn-pill color-2 float-right">Delete</button>
                                                            </form> --}}
                                                            <a href="/admin/pictures/{{ $property->id }}" class="btn btn-dashed btn-pill color-2 float-right">Edit Pictures</a> 
                                                            {{-- <a href="{{ route('pictures.show', ['id' => $property->id]) }}" class="btn btn-dashed btn-pill color-2 float-right">Edit Pictures</a> --}}

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach

                                            {{-- @foreach ($pictures as $picture)
                                            <div class="col-md-12">
                                                <div class="property-box">
                                                    <div class="property-details">
                                                        <span class="font-roboto">{{ $picture->name }}</span>
                                                        <div class="my-listing font-roboto">July 18, 2022</div>
                                                        <a href="#">
                                                            <h3>{{ $picture->name }}</h3>
                                                        </a>
                                                        <a href="#">
                                                            <h3>{{ $user->email }}</h3>
                                                        </a>
                                                        <p class="font-roboto">{{ $user->about_agent }}</p>

                                                        <div class="property-btn d-flex justify-content-between">
                                                            <a href="pictures/{{ $picture->id }}/edit" class="btn btn-dashed btn-pill color-2 float-left">Edit</a>
                                                            <a href="/admin/pictures/{{ $picture->id }}" class="btn btn-dashed btn-pill color-2 float-right">Details</a>
                                                            <form action="/admin/pictures/{{ $picture->id }}" class="pt-0" method="POST">
                                                                @csrf
                                                                @method('delete')
                                                                <button
                                                                    type="submit"
                                                                    class="btn btn-warning btn-dashed btn-pill float-right">
                                                                        Delete
                                                                </button>
                                                            </form>
                                                            <a href="" class="btn btn-dashed btn-pill color-2 float-right">Delete</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach --}}
                                            {{-- <div class="float-end d-flex">{{ $properties->links() }}</div> --}}


                                        </div>

                                        {{-- <nav class="theme-pagination">
                                            <ul class="pagination">
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0)" aria-label="Previous">
                                                        <span aria-hidden="true">«</span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                </li>
                                                <li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
                                                <li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
                                                <li class="page-item">
                                                    <a class="page-link" href="javascript:void(0)" aria-label="Next">
                                                        <span aria-hidden="true">»</span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </nav> --}}
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
