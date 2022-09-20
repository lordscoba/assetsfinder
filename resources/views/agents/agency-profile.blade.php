@extends('layouts.app')

@section('content')


    <!-- breadcrumb start -->
    <section class="breadcrumb-section p-0">
        <img src="../../../assets/images/inner-background.jpg" class="bg-img img-fluid" alt="">
        <div class="container">
            <div class="breadcrumb-content">
                <div>
                    <h2>Profile</h2>
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Agency Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- agent profile section start -->
    <section class="agent-section property-section">
        <div class="container">
            <div class="row ratio_63">
                <div class="col-xl-9 col-lg-8 property-grid-2">
                    <div class="our-agent theme-card">
                        <div class="row">
                            <div class="col-sm-6 ratio_landscape">
                                <div class="agent-image">
                                    <img src="{{ URL::asset('images/' . $agencies->image_path) }}" class="img-fluid bg-img"
                                        alt="">
                                    <span
                                        class="label label-shadow">{{ DB::table('properties')->where('agency', $agencies->name)->count() }}
                                        Properties</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="agent-wrap">
                                    <div class="our-agent-details">
                                        <h3>Real estate agency</h3>
                                        <h6>{{ $agencies->name }}</h6>
                                        <ul>
                                            <li>
                                                <div class="media">
                                                    <div class="icons-square">
                                                        <i data-feather="map-pin"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6>{{ $agencies->address }}</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <div class="icons-square">
                                                        <i data-feather="phone-call"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6>{{ $agencies->phone_number }}</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <div class="icons-square">
                                                        <i data-feather="mail"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6>{{ $agencies->email }}</h6>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="with-link">
                                                <div class="media">
                                                    <div class="icons-square">
                                                        <i data-feather="link"></i>
                                                    </div>
                                                    <div class="media-body">
                                                        <h6><a href="javascript:void(0)">{{ $agencies->website }}</a></h6>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <ul class="agent-social">
                                        <li><a href="{{ $agencies->facebook_link }}" class="facebook"><i
                                                    class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="{{ $agencies->twitter_link }}" class="twitter"><i
                                                    class="fab fa-twitter"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="about-agent theme-card">
                        <h3>About the agency</h3>
                        <div class="row">
                            <p class="font-roboto col-xl-4"> {{ $agencies->about }}</p>

                        </div>

                    </div>
                    <div class="agency-title">
                        <h3>Our Agent</h3>
                    </div>
                    <div class="row column-sm property-label">
                        @foreach (DB::table('users')->where('agency', $agencies->name)->get()
        as $user)
                            <div class="col-xl-4 col-md-6 wow fadeInUp">
                                <div class="property-box">
                                    <div class="agent-image">
                                        <div>
                                            <img src="{{ URL::asset('images/' . $user->image_path) }}" class="img-fluid"
                                                alt="">
                                            <span
                                                class="label label-shadow">{{ DB::table('properties')->where('user_id', $user->id)->count() }}
                                                properties</span>
                                            <div class="agent-overlay"></div>
                                            <div class="overlay-content">
                                                <ul>
                                                    </li>
                                                    <li><a href="{{ $user->twitter_link }}"><img
                                                                src="../../../assets/images/about/icon-2.png"
                                                                alt=""></a>
                                                    </li>
                                                    <li><a href="{{ $user->facebook_link }}"><img
                                                                src="../../../assets/images/about/icon-3.png"
                                                                alt=""></a>
                                                    </li>
                                                </ul>
                                                <span>Connect</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="agent-content">
                                        <h3><a href="agency-profile.html">{{ $user->lastname . ' ' . $user->firstname }}</a>
                                        </h3>
                                        <p class="font-roboto">Real estate Agent</p>
                                        <ul class="agent-contact">
                                            <li>
                                                <i class="fas fa-phone-alt"></i>
                                                <span class="phone-number">{{ $user->phone_number }}</span>
                                                <span class="character">****</span>
                                                <span class="label label-light label-flat color-2">
                                                    show
                                                    <span>hide</span>
                                                </span>
                                            </li>
                                            <li><i class="fas fa-envelope"></i>{{ $user->email }}</li>

                                        </ul>
                                        <a href="{{ route('agent-profile', ['id' => $user->id]) }}">View profile <i
                                                class="fas fa-arrow-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                    <div class="agent-property">
                        <div class="filter-panel">
                            <div class="top-panel">
                                <div>
                                    <h3>Properties Listing</h3>
                                </div>
                            </div>
                        </div>
                        <div class="property-2 row column-sm zoom-gallery property-label property-grid">
                            @forelse (DB::table('properties')->where('agency',$agencies->name)->get() as $property)
                                <div class="col-md-6 wow fadeInUp">
                                    <div class="property-box">
                                        <div class="property-image">
                                            <div class="property-slider">
                                                @forelse (DB::table('pictures')->where('properties_id', $property->id)->get() as $picture)
                                                    <a href="javascript:void(0)">
                                                        <img src="{{ URL::asset('images/' . $picture->image_path) }}"
                                                            class="bg-img" alt="">
                                                    </a>
                                                @empty
                                                    <a href="javascript:void(0)">
                                                        <img src="../../../assets/images/property/5.jpg" class="bg-img"
                                                            alt="">

                                                    </a>
                                                    <a href="javascript:void(0)">
                                                        <img src="../../../assets/images/property/3.jpg" class="bg-img"
                                                            alt="">

                                                    </a>
                                                @endforelse
                                            </div>
                                            <div class="labels-left">
                                                <div>
                                                    <span
                                                        class="label label-shadow">{{ $property->property_status }}</span>
                                                </div>
                                            </div>
                                            <div class="seen-data">
                                                <i data-feather="camera"></i>
                                                <span>{{ DB::table('pictures')->where('properties_id', $property->id)->count() }}</span>
                                            </div>

                                        </div>

                                        <div class="property-details">
                                            <span class="font-roboto">{{ $property->country }}</span>
                                            <a href="single-property-8.html">
                                                <h3>{{ $property->property_type }}</h3>
                                            </a>
                                            <h6>${{ $property->property_price }}.00*</h6>
                                            <p class="font-roboto">{{ $property->description }}</p>
                                            <ul>
                                                <li><img src="../../../assets/images/svg/icon/double-bed.svg"
                                                        class="img-fluid" alt="">Bed : {{ $property->beds }}
                                                </li>
                                                <li><img src="../../../assets/images/svg/icon/bathroom.svg"
                                                        class="img-fluid" alt="">Baths :
                                                    {{ $property->bathrooms }}</li>
                                                <li><img src="../../../assets/images/svg/icon/square-ruler-tool.svg"
                                                        class="img-fluid ruler-tool" alt="">Sq Ft :
                                                    {{ $property->area }}</li>
                                            </ul>
                                            <div class="property-btn d-flex">
                                                <span>{{ $property->created_at }}</span>
                                                <button type="button"
                                                    onclick="document.location='{{ route('description',['id'=>$property->id]) }}'"
                                                    class="btn btn-dashed btn-pill color-2">Details</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p>No properties</p>
                            @endforelse

                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="left-sidebar single-sidebar sticky-cls">
                        <div class="filter-cards">

                            <div class="advance-card">
                                <h6>Recently Added</h6>
                                <div class="recent-property">
                                    <ul>
                                        <li>
                                            <div class="media">
                                                <img src="../../../assets/images/property/9.jpg" class="img-fluid"
                                                    alt="">
                                                <div class="media-body">
                                                    <h5>Sea Breezes</h5>
                                                    <span>$9800 / <span>Month</span></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img src="../../../assets/images/property/10.jpg" class="img-fluid"
                                                    alt="">
                                                <div class="media-body">
                                                    <h5>Orchard House</h5>
                                                    <span>$7500 / <span>Month</span></span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img src="../../../assets/images/property/11.jpg" class="img-fluid"
                                                    alt="">
                                                <div class="media-body">
                                                    <h5>Neverland</h5>
                                                    <span>$5000 / <span>Month</span></span>
                                                </div>
                                            </div>
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
    <!-- agent profile section end -->

@endsection
