@extends('layouts.app')

@section('content')

@livewireStyles

@livewire('select-house')
    <!-- feature section start -->
    <section class="feature-section banner-4">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title-1 text-white">
                        <span class="label label-gradient color-6">Our</span>
                        <h2>Featured Property</h2>
                        <hr>
                    </div>
                    <div class="feature-1 arrow-light">
                        @forelse (DB::table('properties')->where('property_status','Sale')->limit(2)->inRandomOrder()->get() as $property)
                            <div>
                                <div class="feature-wrapper">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-3">
                                            <div class="feature-left">
                                                <div class="property-details">
                                                    <span class="font-roboto">{{ $property->city }}</span>
                                                    <a href="single-property-8.html">
                                                        <h3 class="d-flex">{{ $property->property_type }} <span><span
                                                                    class="label label-dark label-pill">{{ $property->property_status }}</span></span>
                                                        </h3>
                                                    </a>
                                                    <h6 class="color-6">${{ $property->property_price }}.00*</h6>
                                                    <p class="font-roboto">{{ $property->description }}</p>
                                                    <ul>
                                                        <li><img src="../assets/images/svg/icon/double-bed.svg"
                                                                class="img-fluid" alt="">Bed :
                                                            {{ $property->beds }}</li>
                                                        <li><img src="../assets/images/svg/icon/bathroom.svg"
                                                                class="img-fluid" alt="">Baths :
                                                            {{ $property->bathrooms }}</li>
                                                        <li><img src="../assets/images/svg/icon/square-ruler-tool.svg"
                                                                class="img-fluid ruler-tool" alt="">Sq Ft :
                                                            {{ $property->area }}</li>
                                                    </ul>
                                                    <a href="user-favourites.html">
                                                        <span class="round-half color-6">
                                                            <i data-feather="heart"></i>
                                                        </span>
                                                    </a>
                                                    
                                                    <div class="property-btn">
                                                        <a href="{{ route('description', ['id' => $property->id]) }}"
                                                            class="btn btn-dashed btn-pill color-6"
                                                            tabindex="0">Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-lg-9 order-md">
                                            <div class="feature-image">
                                                @forelse (DB::table('pictures')->limit(1)->where('properties_id', $property->id)->get() as $picture)
                                                    <img src="{{ URL::asset('images/' . $picture->image_path) }}"
                                                        alt="" class="bg-img">
                                                @empty
                                                    <img src="../assets/images/property/3.jpg" alt=""
                                                        class="bg-img">
                                                @endforelse

                                                <h4>{{ $property->property_type }}</h4>
                                                <span class="box-color"></span>
                                                <span class="signature">
                                                    <img src="../assets/images/signature/1.png" alt="">
                                                </span>
                                                <span class="label label-white label-lg color-6">Featured</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        @empty
                            <div>
                                <div class="feature-wrapper">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-3">
                                            <div class="feature-left">
                                                <div class="property-details">
                                                    <span class="font-roboto">New York</span>
                                                    <a href="single-property-8.html">
                                                        <h3 class="d-flex">Merrick in Spring Way <span><span
                                                                    class="label label-dark label-pill">Open
                                                                    house</span></span></h3>
                                                    </a>
                                                    <h6 class="color-6">$9554.00*</h6>
                                                    <p class="font-roboto">Different types of housing can be use same
                                                        physical type.connected residences might be owned by a single entity
                                                        or owned separately with an agreement covering the relationship
                                                        between units and common areas and concerns.</p>
                                                    <ul>
                                                        <li><img src="../assets/images/svg/icon/double-bed.svg"
                                                                class="img-fluid" alt="">Bed : 5</li>
                                                        <li><img src="../assets/images/svg/icon/bathroom.svg"
                                                                class="img-fluid" alt="">Baths : 3</li>
                                                        <li><img src="../assets/images/svg/icon/square-ruler-tool.svg"
                                                                class="img-fluid ruler-tool" alt="">Sq Ft : 5000
                                                        </li>
                                                    </ul>
                                                    <a href="user-favourites.html">
                                                        <span class="round-half color-6">
                                                            <i data-feather="heart"></i>
                                                        </span>
                                                    </a>
                                                    <div class="property-btn">
                                                        <a href="single-property-8.html"
                                                            class="btn btn-dashed btn-pill color-6"
                                                            tabindex="0">Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-lg-9 order-md">
                                            <div class="feature-image">
                                                <img src="../assets/images/property/3.jpg" alt="" class="bg-img">
                                                <h4>FAMILY HOME</h4>
                                                <span class="box-color"></span>
                                                <span class="signature">
                                                    <img src="../assets/images/signature/1.png" alt="">
                                                </span>
                                                <span class="label label-white label-lg color-6">Featured</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="feature-wrapper">
                                    <div class="row">
                                        <div class="col-xl-4 col-lg-3">
                                            <div class="feature-left ">
                                                <div class="property-details">
                                                    <span class="font-roboto">New York</span>
                                                    <a href="single-property-8.html">
                                                        <h3 class="d-flex">Allen's Across Way <span><span
                                                                    class="label label-dark label-pill">Open
                                                                    house</span></span></h3>
                                                    </a>
                                                    <h6 class="color-6">$6844.00*</h6>
                                                    <p class="font-roboto">Connected residences might be owned by a single
                                                        entity or owned separately with an agreement covering the
                                                        relationship between units and common areas and concerns. Different
                                                        types of housing can be use same physical type.</p>
                                                    <ul>
                                                        <li><img src="../assets/images/svg/icon/double-bed.svg"
                                                                class="img-fluid" alt="">Bed : 3</li>
                                                        <li><img src="../assets/images/svg/icon/bathroom.svg"
                                                                class="img-fluid" alt="">Baths : 2</li>
                                                        <li><img src="../assets/images/svg/icon/square-ruler-tool.svg"
                                                                class="img-fluid ruler-tool" alt="">Sq Ft : 1000
                                                        </li>
                                                    </ul>
                                                    <a href="user-favourites.html">
                                                        <span class="round-half color-6">
                                                            <i data-feather="heart"></i>
                                                        </span>
                                                    </a>
                                                    <div class="property-btn">
                                                        <a href="single-property-8.html"
                                                            class="btn btn-dashed btn-pill color-6"
                                                            tabindex="0">Details</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 col-lg-9 order-md">
                                            <div class="feature-image">
                                                <img src="../assets/images/property/2.jpg" alt="" class="bg-img">
                                                <h4>FAMILY HOME</h4>
                                                <span class="box-color"></span>
                                                <span class="signature">
                                                    <img src="../assets/images/signature/1.png" alt="">
                                                </span>
                                                <span class="label label-white label-lg color-6">Featured</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature section end -->

    <!-- property section start -->
    <section class="property-section property-color-6">
        <div class="container">
            <div class="row ratio_55">
                <div class="col">
                    <div class="title-1 color-6">
                        <span class="label label-gradient color-6">Rent</span>
                        <h2>Latest For Rent</h2>
                        <hr>
                    </div>
                    <div class="property-2 row column-space color-6">

                        @forelse (DB::table('properties')->where('property_status','Rent')->limit(6)->orderBy('created_at','desc')->get() as $property)
                            <div class="col-xl-4 col-md-6 wow fadeInUp">
                                <div class="property-box">
                                    <div class="property-image">
                                        <div class="property-slider color-6">
                                            @forelse (DB::table('pictures')->where('properties_id', $property->id)->get() as $picture)
                                                <a href="javascript:void(0)">
                                                    <img src="{{ URL::asset('images/' . $picture->image_path) }}"
                                                        class="bg-img" alt="">
                                                </a>
                                            @empty
                                                <a href="javascript:void(0)">
                                                    <img src="../assets/images/property/16.jpg" class="bg-img"
                                                        alt="">

                                                </a>
                                                <a href="javascript:void(0)">
                                                    <img src="../assets/images/property/21.jpg" class="bg-img"
                                                        alt="">

                                                </a>
                                                <a href="javascript:void(0)">
                                                    <img src="../assets/images/property/23.jpg" class="bg-img"
                                                        alt="">

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
                                        <a href="single-property-8.html">
                                            <h3>{{ $property->property_type }}</h3>
                                        </a>
                                        <h6 class="color-6">${{ $property->property_price }}.00*</h6>
                                        <p class="font-roboto">{{ $property->description }}</p>
                                        <ul>
                                            <li><img src="../assets/images/svg/icon/double-bed.svg" class="img-fluid"
                                                    alt="">Bed : {{ $property->beds }}</li>
                                            <li><img src="../assets/images/svg/icon/bathroom.svg" class="img-fluid"
                                                    alt="">Baths : {{ $property->bathrooms }}</li>
                                            <li><img src="../assets/images/svg/icon/square-ruler-tool.svg"
                                                    class="img-fluid ruler-tool" alt="">Sq Ft :
                                                {{ $property->area }}</li>
                                        </ul>
                                        <div class="property-btn d-flex">
                                            <span>{{ $property->created_at }}</span>
                                            <button type="button"
                                                onclick="document.location='{{ route('description', ['id' => $property->id]) }}'"
                                                class="btn btn-dashed btn-pill color-6">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        @empty
                            <div class="col-xl-4 col-md-6 wow fadeInUp">
                                <div class="property-box">
                                    <div class="property-image">
                                        <div class="property-slider color-6">
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/23.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/21.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/16.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/22.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                        </div>
                                        <div class="labels-left">
                                            <div>
                                                <span class="label label-shadow">sale</span>
                                            </div>
                                        </div>
                                        <div class="seen-data">
                                            <i data-feather="camera"></i>
                                            <span>42</span>
                                        </div>
                                        <div class="overlay-property-box">
                                            <a href="compare.html" class="effect-round" data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="Compare">
                                                <i data-feather="shuffle"></i>
                                            </a>
                                            <a href="user-favourites.html" class="effect-round like"
                                                data-bs-toggle="tooltip" data-bs-placement="left" title="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="property-details">
                                        <span class="font-roboto">usa</span>
                                        <a href="single-property-8.html">
                                            <h3>Home in Merrick Way</h3>
                                        </a>
                                        <h6 class="color-6">$4513.00*</h6>
                                        <p class="font-roboto">This home provides wonderful entertaining spaces with a chef
                                            kitchen opening. Elegant retreat in a quiet Coral Gables setting..</p>
                                        <ul>
                                            <li><img src="../assets/images/svg/icon/double-bed.svg" class="img-fluid"
                                                    alt="">Bed : 4</li>
                                            <li><img src="../assets/images/svg/icon/bathroom.svg" class="img-fluid"
                                                    alt="">Baths : 4</li>
                                            <li><img src="../assets/images/svg/icon/square-ruler-tool.svg"
                                                    class="img-fluid ruler-tool" alt="">Sq Ft : 5000</li>
                                        </ul>
                                        <div class="property-btn d-flex">
                                            <span>December 1, 2022</span>
                                            <button type="button" onclick="document.location='single-property-8.html'"
                                                class="btn btn-dashed btn-pill color-6">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 wow fadeInUp">
                                <div class="property-box">
                                    <div class="property-image">
                                        <div class="property-slider color-6">
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/21.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/22.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/23.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/16.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                        </div>
                                        <div class="labels-left">
                                            <div>
                                                <span class="label label-shadow">sale</span>
                                            </div>
                                        </div>
                                        <div class="seen-data">
                                            <i data-feather="camera"></i>
                                            <span>25</span>
                                        </div>
                                        <div class="overlay-property-box">
                                            <a href="compare.html" class="effect-round" data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="Compare">
                                                <i data-feather="shuffle"></i>
                                            </a>
                                            <a href="user-favourites.html" class="effect-round like"
                                                data-bs-toggle="tooltip" data-bs-placement="left" title="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="property-details">
                                        <span class="font-roboto">France</span>
                                        <a href="single-property-8.html">
                                            <h3>Allen's Across Way</h3>
                                        </a>
                                        <h6 class="color-6">$6558.00*</h6>
                                        <p class="font-roboto">Elegant retreat in a quiet Coral Gables setting. This home
                                            provides wonderful entertaining spaces with a chef
                                            kitchen opening…</p>
                                        <ul>
                                            <li><img src="../assets/images/svg/icon/double-bed.svg" class="img-fluid"
                                                    alt="">Bed : 4</li>
                                            <li><img src="../assets/images/svg/icon/bathroom.svg" class="img-fluid"
                                                    alt="">Baths : 4</li>
                                            <li><img src="../assets/images/svg/icon/square-ruler-tool.svg"
                                                    class="img-fluid ruler-tool" alt="">Sq Ft : 5000</li>
                                        </ul>
                                        <div class="property-btn d-flex">
                                            <span>June 20, 2022</span>
                                            <button type="button" onclick="document.location='single-property-8.html'"
                                                class="btn btn-dashed btn-pill color-6">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 wow fadeInUp">
                                <div class="property-box">
                                    <div class="property-image">
                                        <div class="property-slider color-6">
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/16.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/21.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/22.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/23.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                        </div>
                                        <div class="labels-left">
                                            <div>
                                                <span class="label label-shadow">sale</span>
                                            </div>
                                        </div>
                                        <div class="seen-data">
                                            <i data-feather="camera"></i>
                                            <span>09</span>
                                        </div>
                                        <div class="overlay-property-box">
                                            <a href="compare.html" class="effect-round" data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="Compare">
                                                <i data-feather="shuffle"></i>
                                            </a>
                                            <a href="user-favourites.html" class="effect-round like"
                                                data-bs-toggle="tooltip" data-bs-placement="left" title="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="property-details">
                                        <span class="font-roboto">usa</span>
                                        <a href="single-property-8.html">
                                            <h3>Hidden Spring Hideway</h3>
                                        </a>
                                        <h6 class="color-6">$4513.00*</h6>
                                        <p class="font-roboto">The most common and most absolute type of estate, the tenant
                                            enjoys the greatest discretion over the disposal of the property.</p>
                                        <ul>
                                            <li><img src="../assets/images/svg/icon/double-bed.svg" class="img-fluid"
                                                    alt="">Bed : 4</li>
                                            <li><img src="../assets/images/svg/icon/bathroom.svg" class="img-fluid"
                                                    alt="">Baths : 4</li>
                                            <li><img src="../assets/images/svg/icon/square-ruler-tool.svg"
                                                    class="img-fluid ruler-tool" alt="">Sq Ft : 5000</li>
                                        </ul>
                                        <div class="property-btn d-flex">
                                            <span>January 6, 2022</span>
                                            <button type="button" onclick="document.location='single-property-8.html'"
                                                class="btn btn-dashed btn-pill color-6">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 wow fadeInUp">
                                <div class="property-box">
                                    <div class="property-image">
                                        <div class="property-slider color-6">
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/24.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/22.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/16.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/23.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                        </div>
                                        <div class="labels-left">
                                            <div>
                                                <span class="label label-shadow">sale</span>
                                            </div>
                                        </div>
                                        <div class="seen-data">
                                            <i data-feather="camera"></i>
                                            <span>25</span>
                                        </div>
                                        <div class="overlay-property-box">
                                            <a href="compare.html" class="effect-round" data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="Compare">
                                                <i data-feather="shuffle"></i>
                                            </a>
                                            <a href="user-favourites.html" class="effect-round like"
                                                data-bs-toggle="tooltip" data-bs-placement="left" title="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="property-details">
                                        <span class="font-roboto">usa</span>
                                        <a href="single-property-8.html">
                                            <h3>Merrick in Spring Way</h3>
                                        </a>
                                        <h6 class="color-6">$4513.00*</h6>
                                        <p class="font-roboto">Real estate market in most countries are not as organize or
                                            efficient as markets for other, more liquid investment instruments.</p>
                                        <ul>
                                            <li><img src="../assets/images/svg/icon/double-bed.svg" class="img-fluid"
                                                    alt="">Bed : 4</li>
                                            <li><img src="../assets/images/svg/icon/bathroom.svg" class="img-fluid"
                                                    alt="">Baths : 4</li>
                                            <li><img src="../assets/images/svg/icon/square-ruler-tool.svg"
                                                    class="img-fluid ruler-tool" alt="">Sq Ft : 5000</li>
                                        </ul>
                                        <div class="property-btn d-flex">
                                            <span>December 1, 2022</span>
                                            <button type="button" onclick="document.location='single-property-8.html'"
                                                class="btn btn-dashed btn-pill color-6">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-md-6 wow fadeInUp">
                                <div class="property-box">
                                    <div class="property-image">
                                        <div class="property-slider color-6">
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/25.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/24.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/22.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../assets/images/property/16.jpg" class="bg-img"
                                                    alt="">

                                            </a>
                                        </div>
                                        <div class="labels-left">
                                            <div>
                                                <span class="label label-dark">no fees</span>
                                            </div>
                                            <span class="label label-success">open house</span>
                                        </div>
                                        <div class="seen-data">
                                            <i data-feather="camera"></i>
                                            <span>42</span>
                                        </div>
                                        <div class="overlay-property-box">
                                            <a href="compare.html" class="effect-round" data-bs-toggle="tooltip"
                                                data-bs-placement="left" title="Compare">
                                                <i data-feather="shuffle"></i>
                                            </a>
                                            <a href="user-favourites.html" class="effect-round like"
                                                data-bs-toggle="tooltip" data-bs-placement="left" title="wishlist">
                                                <i data-feather="heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="property-details">
                                        <span class="font-roboto">brazil</span>
                                        <a href="single-property-8.html">
                                            <h3>Hidden Spring Hideway</h3>
                                        </a>
                                        <h6 class="color-6">$9554.00*</h6>
                                        <p class="font-roboto">An interior designer is someone who
                                            plans,researches,coordinates,management and manages such enhancement projects.
                                        </p>
                                        <ul>
                                            <li><img src="../assets/images/svg/icon/double-bed.svg" class="img-fluid"
                                                    alt="">Bed : 4</li>
                                            <li><img src="../assets/images/svg/icon/bathroom.svg" class="img-fluid"
                                                    alt="">Baths : 4</li>
                                            <li><img src="../assets/images/svg/icon/square-ruler-tool.svg"
                                                    class="img-fluid ruler-tool" alt="">Sq Ft : 5000</li>
                                        </ul>
                                        <div class="property-btn d-flex">
                                            <span>July 18, 2022</span>
                                            <button type="button" onclick="document.location='single-property-8.html'"
                                                class="btn btn-dashed btn-pill color-6">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforelse


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- property section end -->

    <!--our new offer section start -->
    <section class="offer-section banner-section banner-4 slick-between ">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title-1 text-white">
                        <span class="label label-gradient color-6">New Offer</span>
                        <h2>Our New Offer</h2>
                        <hr>
                    </div>
                    <div class="offer-slider">
                        <div>
                            <div class="offer-wrapper">
                                <div class="media">
                                    <div class="offer-icon">
                                        <img src="../assets/images/others/icon-1.png" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h6>AssetsFinder</h6>
                                        <h3>Looking for the new home?</h3>
                                        <p>10 new offers every day. 350 offers on site, trusted
                                            by a community of thousands of users.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="offer-wrapper">
                                <div class="media">
                                    <div class="offer-icon">
                                        <img src="../assets/images/others/icon-2.png" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h6>AssetsFinder</h6>
                                        <h3>Are you looking for home?</h3>
                                        <p>350 offers on site, trusted by a community of thousands of users. 10 new offers
                                            every day. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="offer-wrapper">
                                <div class="media">
                                    <div class="offer-icon">
                                        <img src="../assets/images/others/icon-1.png" alt="">
                                    </div>
                                    <div class="media-body">
                                        <h6>AssetsFinder</h6>
                                        <h3>Looking for the new Office?</h3>
                                        <p>10 new offers every day. 350 offers on site, trusted
                                            by a community of thousands of users.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--our new offer section end -->

    <!-- find properties section start -->
    {{-- <section class="my-gallery gallery-6">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="title-1 color-6">
                    <span class="label label-gradient color-6">city</span>
                    <h2>Find Properties in These Cities</h2>
                    <hr>
                </div>
                <div class="row">
                    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6 wow fadeInUp">
                        <div class="find-cities bg-size">
                            <img src="../assets/images/property/8.jpg" class="bg-img" alt="">
                            <div class="citi-overlay">
                                <div>
                                    <h4>12+ Property</h4>
                                    <h2>Dubai</h2>
                                    <h6 class="font-roboto">Many Property in this city</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6 wow fadeInUp">
                        <div class="find-cities bg-size">
                            <img src="../assets/images/others/1.jpg" class="bg-img" alt="">
                            <div class="citi-overlay">
                                <div>
                                    <h4>5+ Property</h4>
                                    <h2>U.s.a</h2>
                                    <h6 class="font-roboto">Many Land in this city</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-8 col-md-7 wow fadeInUp">
                        <div class="find-cities bg-size">
                            <img src="../assets/images/3.jpg" class="bg-img" alt="">
                            <div class="citi-overlay">
                                <div>
                                    <h4>6+ Property</h4>
                                    <h2>New York</h2>
                                    <h6 class="font-roboto">Many Spaces in this city</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-8 col-md-7 wow fadeInUp">
                        <div class="find-cities bg-size">
                            <img src="../assets/images/property/6.jpg" class="bg-img" alt="">
                            <div class="citi-overlay">
                                <div>
                                    <h4>8+ Property</h4>
                                    <h2>Brazil</h2>
                                    <h6 class="font-roboto">Many Flat in this city</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6 wow fadeInUp">
                        <div class="find-cities bg-size">
                            <img src="../assets/images/1.jpg" class="bg-img" alt="">
                            <div class="citi-overlay">
                                <div>
                                    <h4>10+ Property</h4>
                                    <h2>Dubai</h2>
                                    <h6 class="font-roboto">Many Land in this city</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-6 wow fadeInUp">
                        <div class="find-cities bg-size">
                            <img src="../assets/images/property/7.jpg" class="bg-img" alt="">
                            <div class="citi-overlay">
                                <div>
                                    <h4>12+ Property</h4>
                                    <h2>France</h2>
                                    <h6 class="font-roboto">Many Spaces in this city</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
    <!-- find properties section end -->

    <!-- banner section start -->
    <section class="banner-section banner-4 parallax-image">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title-1 color-6">
                        <span class="label label-gradient color-6">Buy or sell</span>
                    </div>
                    <div class="light-bg banner-1">
                        <span class="big-gradient">*</span>
                        <span class="small-white">*</span>
                        <h6>AssetsFinder real estate</h6>
                        <h2>Looking to Buy a new property or Sell an existing one?
                            Real Homes provides an easy solution!</h2>
                        <div class="button-banner">
                            <a href="{{ route('login') }}" class="btn btn-gradient color-6">Submit property</a>
                            <a href="{{ route('login') }}" class="btn btn-white color-6"> <span>Browse
                                    property</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- banner section end -->

    <!-- about section start -->
    <section class="about-section slick-between about-color6">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title-1 color-6">
                        <span class="label label-gradient color-6">Agent</span>
                        <h2>Meet our Agent</h2>
                        <hr>
                    </div>
                    <div class="about-1 about-wrap arrow-white color-6">
                        @forelse (DB::table('users')->where('agent_status','yes')->limit(6)->orderBy('created_at','desc')->get() as $agent)
                            <div>
                                <div class="about-content row">
                                    <div class="col-xl-6">
                                        <div class="about-image">
                                            @forelse (DB::table('users')->where('id', $agent->id)->get() as $picture)
                                                <img src="{{ URL::asset('images/' . $picture->image_path) }}"
                                                    alt="" class="img-fluid" alt="">
                                            @empty
                                                <img src="../assets/images/property/3.jpg" alt=""
                                                    class="img-fluid" alt="">
                                            @endforelse
                                            {{-- <img src="../assets/images/about/1.jpg" class="img-fluid" alt=""> --}}
                                            <div class="about-overlay"></div>
                                            <div class="overlay-content">
                                                <ul>
                                                    <li><a href="{{ $agent->twitter_link }}"><img
                                                                src="../assets/images/about/icon-1.png"
                                                                alt=""></a>
                                                    </li>
                                                    <li><a href="{{ $agent->facebook_link }}"><img
                                                                src="../assets/images/about/icon-2.png"
                                                                alt=""></a>
                                                    </li>
                                                </ul>
                                                <span>Connect</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="our-details">
                                            <a href="agent-profile.html">
                                                <h6 class="d-flex">{{ $agent->lastname . ' ' . $agent->firstname }}<span
                                                        class="label-heart color-6 ms-2"><i
                                                            data-feather="heart"></i></span></h6>
                                            </a>
                                            <h3>Agent for {{ $agent->agency }}</h3>
                                            <span class="font-roboto"><i data-feather="mail"
                                                    class="me-1"></i>{{ $agent->email }}</span>
                                            <p class="font-roboto">{{ $agent->about_agent }}</p>
                                            <a href="{{ route('agent-profile', ['id' => $agent->id]) }}"
                                                class="btn btn-gradient btn-pill color-6 mt-2"><i
                                                    data-feather="eye"></i>View Portfolio</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div>
                                <div class="about-content row">
                                    <div class="col-xl-6">
                                        <div class="about-image">
                                            <img src="../assets/images/about/1.jpg" class="img-fluid" alt="">
                                            <div class="about-overlay"></div>
                                            <div class="overlay-content">
                                                <ul>
                                                    <li><a href="https://accounts.google.com/"><img
                                                                src="../assets/images/about/icon-1.png"
                                                                alt=""></a>
                                                    </li>
                                                    <li><a href="https://twitter.com/"><img
                                                                src="../assets/images/about/icon-2.png"
                                                                alt=""></a>
                                                    </li>
                                                    <li><a href="https://www.facebook.com/"><img
                                                                src="../assets/images/about/icon-3.png"
                                                                alt=""></a>
                                                    </li>
                                                </ul>
                                                <span>Connect</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="our-details">
                                            <a href="agent-profile.html">
                                                <h6 class="d-flex">Ty R. Leeva <span class="label-heart color-6 ms-2"><i
                                                            data-feather="heart"></i></span></h6>
                                            </a>
                                            <h3>Communicating with..</h3>
                                            <span class="font-roboto"><i data-feather="mail"
                                                    class="me-1"></i>Leeva@inspirythemes.com</span>
                                            <p class="font-roboto">A real estate agent or broker is a person who represents
                                                sellers or buyers advised to consult a licensed.</p>
                                            <a href="agent-profile.html" class="btn btn-gradient btn-pill color-6 mt-2"><i
                                                    data-feather="eye"></i>View Portfolio</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="about-content row">
                                    <div class="col-xl-6">
                                        <div class="about-image">
                                            <img src="../assets/images/about/2.jpg" class="img-fluid" alt="">
                                            <div class="about-overlay"></div>
                                            <div class="overlay-content">
                                                <ul>
                                                    <li><a href="https://accounts.google.com/"><img
                                                                src="../assets/images/about/icon-1.png"
                                                                alt=""></a>
                                                    </li>
                                                    <li><a href="https://twitter.com/"><img
                                                                src="../assets/images/about/icon-2.png"
                                                                alt=""></a>
                                                    </li>
                                                    <li><a href="https://www.facebook.com/"><img
                                                                src="../assets/images/about/icon-3.png"
                                                                alt=""></a>
                                                    </li>
                                                </ul>
                                                <span>Connect</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="our-details">
                                            <a href="agent-profile.html">
                                                <h6 class="d-flex">Mark Andry <span class="label-heart color-6 ms-2"><i
                                                            data-feather="heart"></i></span></h6>
                                            </a>
                                            <h3>Sellers of property.</h3>
                                            <span class="font-roboto"><i data-feather="mail"
                                                    class="me-1"></i>John@inspirythemes.com</span>
                                            <p class="font-roboto">They are responsible for managing employees and
                                                overseeing daily productivity.</p>
                                            <a href="agent-profile.html" class="btn btn-gradient btn-pill color-6 mt-2"><i
                                                    data-feather="eye"></i>View Portfolio</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="about-content row">
                                    <div class="col-xl-6">
                                        <div class="about-image">
                                            <img src="../assets/images/about/1.jpg" class="img-fluid" alt="">
                                            <div class="about-overlay"></div>
                                            <div class="overlay-content">
                                                <ul>
                                                    <li><a href="https://accounts.google.com/"><img
                                                                src="../assets/images/about/icon-1.png"
                                                                alt=""></a>
                                                    </li>
                                                    <li><a href="https://twitter.com/"><img
                                                                src="../assets/images/about/icon-2.png"
                                                                alt=""></a>
                                                    </li>
                                                    <li><a href="https://www.facebook.com/"><img
                                                                src="../assets/images/about/icon-3.png"
                                                                alt=""></a>
                                                    </li>
                                                </ul>
                                                <span>Connect</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6">
                                        <div class="our-details">
                                            <a href="agent-profile.html">
                                                <h6 class="d-flex">John David <span class="label-heart color-6 ms-2"><i
                                                            data-feather="heart"></i></span></h6>
                                            </a>
                                            <h3>Advised to consult </h3>
                                            <span class="font-roboto"><i data-feather="mail"
                                                    class="me-1"></i>John@inspirythemes.com</span>
                                            <p class="font-roboto">Buyer's agents are brokers or salespersons who assist
                                                buyers by helping them.</p>
                                            <a href="agent-profile.html" class="btn btn-gradient btn-pill color-6 mt-2"><i
                                                    data-feather="eye"></i>View Portfolio</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforelse


                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- about section end -->

    <!-- testimonial section start -->
    <section class="testimonial-bg testimonial-layout6">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title-1 text-white">
                        <span class="label label-gradient color-6">Our</span>
                        <h2>Happy clients</h2>
                        <hr>
                    </div>
                    <div class="testimonial-2 arrow-light">
                        <div>
                            <div class="client-slider light-bg">
                                <ul class="user-list">
                                    <li><img src="../assets/images/testimonial/2.png" alt=""></li>
                                    <li>
                                        <img src="../assets/images/testimonial/1.png" alt="">
                                        <div class="heart-bg">
                                        </div>
                                        <img src="../assets/images/testimonial/heart.png" alt=""
                                            class="heart-icon">
                                    </li>
                                    <li><img src="../assets/images/testimonial/3.png" alt=""></li>
                                </ul>
                                <p>Surveyors make precise measurements of property boundaries. Many industries, including
                                    construction, rely on these measurements</p>
                                <h6>real estate</h6>
                                <ul class="client-rating">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                                <span class="label label-white label-lg"><span class="gradient-1 color-6">Mark
                                        Andry</span></span>
                            </div>
                        </div>
                        <div>
                            <div class="client-slider light-bg">
                                <ul class="user-list">
                                    <li><img src="../assets/images/testimonial/1.png" alt=""></li>
                                    <li>
                                        <img src="../assets/images/testimonial/2.png" alt="">
                                        <div class="heart-bg">
                                        </div>
                                        <img src="../assets/images/testimonial/heart.png" alt=""
                                            class="heart-icon">
                                    </li>
                                    <li><img src="../assets/images/testimonial/3.png" alt=""></li>
                                </ul>
                                <p>Residences can be classified by and connected to residences. Different types of housing
                                    can be use same physical type.</p>
                                <h6>real estate</h6>
                                <ul class="client-rating">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                                <span class="label label-white label-lg"><span class="gradient-1 color-6">John
                                        David</span></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- testimonial section end -->

    <!-- brand 2 start -->
    <section class="small-section">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="slide-1 brand-slider">
                        <div>
                            <a href="javascript:void(0)" class="logo-box">
                                <img src="../assets/images/brand/17.png" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div>
                            <a href="javascript:void(0)" class="logo-box">
                                <img src="../assets/images/brand/18.png" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div>
                            <a href="javascript:void(0)" class="logo-box">
                                <img src="../assets/images/brand/19.png" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div>
                            <a href="javascript:void(0)" class="logo-box">
                                <img src="../assets/images/brand/20.png" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div>
                            <a href="javascript:void(0)" class="logo-box">
                                <img src="../assets/images/brand/21.png" alt="" class="img-fluid">
                            </a>
                        </div>
                        <div>
                            <a href="javascript:void(0)" class="logo-box">
                                <img src="../assets/images/brand/18.png" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- brand 2 end -->

    @livewireScripts
@endsection
