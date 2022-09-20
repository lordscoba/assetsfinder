@extends('layouts.app')

@section('content')
    <!-- breadcrumb start -->
    <section class="ratio_40 breadcrumb-section p-0 single-property-images">
        <div class="main-property-slider arrow-image">
            @forelse (DB::table('pictures')->where('properties_id', $properties->id)->get() as $picture)
                <div>
                    <div>
                        <img src="{{ URL::asset('images/' . $picture->image_path) }}" class="bg-img" alt="">
                    </div>
                </div>

            @empty
                <div>
                    <div>
                        <img src="../../../assets/images/property/2.jpg" class="bg-img" alt="">
                    </div>
                </div>
                <div>
                    <div>
                        <img src="../../../assets/images/property/4.jpg" class="bg-img" alt="">
                    </div>
                </div>
            @endforelse
        </div>
        <div class="single-property-section">
            <div class="container">
                <div class="single-title">
                    <div class="left-single">
                        <div class="d-flex">
                            <h2 class="mb-0">{{ $properties->property_type }}</h2>
                            <span><span class="label label-shadow ms-2">For
                                    {{ $properties->property_status }}</span></span>
                                    &nbsp;<h2 class="mb-0">{{ $properties->country }}</h2>
                        </div>
                        <p class="mt-2">{{ $properties->address }}</p>
                        <ul>
                            <li>
                                <div>
                                    <img src=".../.././assets/images/svg/icon/double-bed.svg" class="img-fluid"
                                        alt="">
                                    <span>{{ $properties->beds }} Bedrooms</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <img src="../../../assets/images/svg/icon/bathroom.svg" class="img-fluid"
                                        alt="">
                                    <span>{{ $properties->bathrooms }} Bathrooms</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <img src="../../../assets/images/svg/icon/sofa.svg" class="img-fluid" alt="">
                                    <span>{{ $properties->halls }} Halls</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <img src="../../../assets/images/svg/icon/square-ruler-tool.svg"
                                        class="img-fluid ruler-tool" alt="">
                                    <span>{{ $properties->area }} Sq ft</span>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <img src="../../../assets/images/svg/icon/garage.svg" class="img-fluid" alt="">
                                    <span>{{ $properties->garage }} Garage</span>
                                </div>
                            </li>
                        </ul>
                        <div class="share-buttons">
                        </div>
                    </div>
                    <div class="right-single">
                        <div class="rating">
                            @php
                                $ratings = DB::table('reviews')
                                    ->where('properties_id', $properties->id)
                                    ->avg('rating');
                                $ratings_count = DB::table('reviews')
                                    ->where('properties_id', $properties->id)
                                    ->count();
                                // echo $ratings_count;
                                $rating = intval($ratings);
                                // echo $rating;
                                $rating_end = 5 - $rating;
                            @endphp
                            @if ($ratings_count == 0)
                                <strong>No Ratings</strong>
                            @else
                                @for ($i = 1; $i <= $rating; $i++)
                                    <i class="fas fa-star"></i>
                                @endfor
                                @for ($i = 1; $i <= $rating_end; $i++)
                                    <i class="far fa-star"></i>
                                @endfor
                            @endif
                        </div>
                        <h2 class="price">${{ $properties->property_price }} <span>/ start From</span></h2>
                        <div class="feature-label">
                            <div class="feature-label">
                                @if ($properties->free_wi_fi == 'yes')
                                <span class="btn btn-dashed color-2 btn-pill">Wi-fi</span> 
                                @endif
                                @if ($properties->emergency_exit == 'yes')
                                <span class="btn btn-dashed color-2 btn-pill">Emergency Exit</span> 
                                @endif
                                @if ($properties->cctv == 'yes')
                                <span class="btn btn-dashed color-2 btn-pill">CCTV</span> 
                                @endif
                                @if ($properties->air_conditioning == 'yes')
                                <span class="btn btn-dashed color-2 btn-pill">Air Conditioning</span> 
                                @endif
                                @if ($properties->free_parking_in_the_area == 'yes')
                                <span class="btn btn-dashed color-2 btn-pill">Car Park</span> 
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- single property start -->
    <section class="single-property">
        <div class="container">
            <div class="row ratio_65">
                <div class="col-xl-9 col-lg-8">
                    <div class="description-section">
                        <div class="description-details">
                            <div class="desc-box">
                                <div class="menu-top" id="searchBar">
                                    <div class="container">
                                        <ul class="nav">
                                            <li class="active"><a class="" href="#about">about</a></li>
                                            <li><a class="" href="#feature">feature</a></li>
                                            <li><a class="" href="#gallery">gallery</a></li>
                                            <li><a class="" href="#video">video</a></li>
                                            <li><a class="" href="#details">details</a></li>
                                            {{-- <li><a class="" href="#floor_plan">Floor plan</a></li> --}}
                                            {{-- <li><a class="" href="#location-map">Location</a></li> --}}
                                        </ul>
                                    </div>
                                </div>
                                <div class="about page-section" id="about">
                                    <h4>Property Brief</h4>
                                    <div class="row">
                                        <div class="col-sm-11">
                                            <p>{{ $properties->description }}</p>
                                        </div>
                                        {{-- <div class="col-sm-4">
                                            <p>connected residences might be owned by a single entity and leased out, or owned separately 
                                                with an agreement covering the relationship between units and common.</p>
                                        </div>
                                        <div class="col-sm-4">
                                            <p>they are connected to neighbouring residences and land. 
                                                Different types of housing tenure can be used for the same physical type.</p>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="desc-box">
                                <div class="page-section feature-dec" id="feature">
                                    <h4 class="content-title">features</h4>
                                    <div class="single-feature row">
                                        <div class="col-xxl-3 col-xl-4 col-6">
                                            <ul>
                                                @if ($properties->free_wi_fi == 'yes')
                                                <li>
                                                    <i class="fas fa-wifi"></i> Free Wi-Fi
                                                </li>    
                                                @endif
                                                @if ($properties->free_wi_fi == 'yes')

                                                @endif
                                                @if ($properties->cctv == 'yes')
                                                <li>
                                                    <i class="fas fa-video"></i> CCTV
                                                </li>
                                                @endif
                                                
                                                @if ($properties->emergency_exit == 'yes')
                                                <li>
                                                    <i class="fas fa-door-open"></i> Emergency Exit
                                                </li>
                                                @endif
                                            </ul>
                                        </div>
                                        <div class="col-xxl-3 col-xl-4 col-6">
                                            <ul>
                                                @if ($properties->free_parking_in_the_area == 'yes')
                                                <li>
                                                    <i class="fas fa-car"></i> free Parking in the area
                                                </li>
                                                @endif
                                                @if ($properties->air_conditioning == 'yes')
                                                <li>
                                                    <i class="fas fa-fan"></i> Air Conditioning
                                                </li>
                                                @endif 
                                            </ul>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="desc-box">
                                <div class="page-section ratio3_2" id="gallery">
                                    <h4 class="content-title">gallery</h4>
                                    <div class="single-gallery">
                                        <div class="gallery-for">
                                            @forelse (DB::table('pictures')->where('properties_id', $properties->id)->get() as $picture)
                                            <div>
                                                <div class="bg-size">
                                                    <img src="{{ URL::asset('images/' . $picture->image_path) }}" class="bg-img"
                                                        alt="">
                                                </div>
                                            </div>
                                        @empty
                                        <div>
                                            <div class="bg-size">
                                                <img src="../../../assets/images/property/4.jpg" class="bg-img"
                                                    alt="">
                                            </div>
                                        </div>
                                        <div>
                                            <div class="bg-size">
                                                <img src="../../../assets/images/property/3.jpg" class="bg-img"
                                                    alt="">
                                            </div>
                                        </div>
                                        @endforelse 
                                        </div>
                                        <div class="gallery-nav">
                                            @forelse (DB::table('pictures')->where('properties_id', $properties->id)->get() as $picture)
                                            <div>
                                                <img src="{{ URL::asset('images/' . $picture->image_path) }}" class="img-fluid"
                                                    alt="">
                                            </div>
                                        @empty
                                        <div>
                                            <img src="../../../assets/images/property/4.jpg" class="img-fluid"
                                                alt="">
                                        </div>
                                        <div>
                                            <img src="../../../assets/images/property/3.jpg" class="img-fluid"
                                                alt="">
                                        </div>
                                        @endforelse
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="desc-box">
                                <div class="page-section ratio_40" id="video">
                                    <h4 class="content-title">video</h4>
                                    <div class="play-bg-image">
                                        <div >
                                            @if ( $properties->video_link != "")
                                            <iframe width="560" height="315" src="{{ $properties->video_link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
                                            @else
                                            <img src="../../../assets/images/property/11.jpg" class="bg-img"
                                            alt="">   
                                            @endif
                                        </div>
                                        {{-- <div class="icon-video">
                                            <a href="javascript:void(0)" data-bs-toggle="modal"
                                                data-bs-target="#videomodal">
                                                <i class="fas fa-play"></i>
                                            </a>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <div class="desc-box">
                                <div class="page-section" id="details">
                                    <h4 class="content-title">Property Details
                                        {{-- <a href="https://www.google.com/maps/place/New+York,+NY,+USA/@40.697488,-73.979681,8z/data=!4m5!3m4!1s0x89c24fa5d33f083b:0xc80b8f06e177fe62!8m2!3d40.7127753!4d-74.0059728?hl=en"
                                            target="_blank">
                                            <i class="fa fa-map-marker-alt"></i> view on map</a> --}}
                                    </h4>
                                    <div class="row">
                                        <div class="col-md-6 col-xl-4">
                                            <ul class="property-list-details">
                                                <li><span>Property Type :</span> {{ $properties->property_type }}</li>
                                                {{-- <li><span>Property ID :</span> ZOEA245</li> --}}
                                                <li><span>Property status :</span> For {{ $properties->property_status }}
                                                </li>
                                                <li><span>Operating Since :</span> 2008</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-xl-4">
                                            <ul class="property-list-details">
                                                <li><span>Price :</span> $ {{ $properties->property_price }}</li>
                                                <li><span>Property Size :</span>{{ $properties->area }} sq / ft</li>
                                                <li><span>Balcony :</span> {{ $properties->balcony }}</li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6 col-xl-4">
                                            <ul class="property-list-details">
                                                <li><span>City :</span> {{ $properties->city }}</li>
                                                <li><span>Bedrooms :</span> {{ $properties->beds }}</li>
                                                <li><span>Bathrooms :</span> {{ $properties->bathrooms }}</li>
                                            </ul>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            {{-- <div class="desc-box">
                                <div class="page-section" id="floor_plan">
                                    <h4 class="content-title">Floor plan</h4>
                                    <img src="../../../assets/images/single-property/floor-plan.png" alt=""
                                        class="img-fluid">
                                </div>
                            </div> --}}
                            {{-- <div class="desc-box">
                                <div class="page-section" id="location-map">
                                    <h4 class="content-title">Location</h4>
                                    <iframe title="realestate location"
                                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d193595.1583091352!2d-74.11976373946229!3d40.69766374859258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1563449626439!5m2!1sen!2sin"
                                        allowfullscreen></iframe>
                                </div>
                            </div> --}}
                            
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="left-sidebar sticky-cls single-sidebar">
                        <div class="filter-cards">
                            <div class="advance-card">
                                <h6>Contact Info</h6>
                                <div class="category-property">
                                    <div class="agent-info">
                                        <div class="media">
                                            <img src="../../../assets/images/testimonial/3.png" class="img-50"
                                                alt="">
                                            <div class="media-body ms-2">
                                                <h6>{{ $properties->contact_name }}</h6>
                                                <p>{{ $properties->contact_email }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <ul>
                                        <li>
                                            <i data-feather="map-pin" class="me-2"></i>{{ $properties->contact_address }}
                                        </li>
                                        <li>
                                            <i data-feather="phone-call" class="me-2"></i>{{ $properties->contact_phone_number }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- single property end -->
@endsection
