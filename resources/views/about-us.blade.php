@extends('layouts.app')
@section('content')

<!-- breadcrumb start -->
    <section class="breadcrumb-section p-0 effect-cls">
        <img src="../assets/images/parallax/3.jpg" class="bg-img img-fluid" alt="">
        <div class="container">
            <div class="breadcrumb-content">
                <div class="text-dark">
                    <h2>About Us</h2>
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">About Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- About us section start -->
    <section class="about-main">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title-2">
                        <h2>About Us</h2>
                        <p class="font-roboto">Elegant retreat in Coral Gables setting. This home provides entertaining spaces with
                            kitchen opening</p>
                    </div>
                    <div class="user-about">
                        <div class="row">
                            <div class="col-xl-7 col-lg-5">
                                <div class="about-image">
                                    <div class="img-box side-left">
                                        <img src="../assets/images/about/6.jpg" class="img-fluid" alt="">
                                        <div class="side-effect"></div>
                                    </div>
                                    <div class="img-box img-abs side-right">
                                        <img src="../assets/images/about/5.jpg" class="img-fluid" alt="">
                                        <div class="side-effect"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-7">
                                <div class="about-content">
                                    <h3>We are the expert of team communication</h3>
                                    <p class="font-roboto">Residences can be classified by and how they are connected to neighbouring residences and land. 
                                        Different types of housing tenure can be used for the same physical type </p>
                                </div>
                                <div class="about-listing">
                                    <ul>
                                        <li>
                                            <h4>{{ DB::table('properties')->count() }}</h4>
                                            <p>Total property</p>
                                        </li>
                                        <li>
                                            <h4>{{ DB::table('users')->where('agent_status','yes')->count() }}</h4>
                                            <p>Agents</p>
                                        </li>
                                        <li>
                                            <h4>{{ DB::table('agencies')->count() }}</h4>
                                            <p>Agency</p>
                                        </li>
                                        <li>
                                            <h4>{{ DB::table('properties')->where('property_status','Sold')->count() }}</h4>
                                            <p>Sold out property</p>
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
    <!-- About us section end -->

    <!-- service section start -->
    <section class="service-section service-2 bg-light">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title-2">
                        <h2>Provided Services</h2>
                        <p>Residences can be classified into different type of housing tenure can used for same physical type.</p>
                    </div>
                    <div class="row property-service column-space about-service">
                        <div class="col-xl-4 col-md-6">
                            <div class="service-box">
                                <div class="hover-line">
                                    <svg class="service-icon">
                                        <use
                                            xlink:href="../assets/svg/icons.svg#home-heart"></use>
                                    </svg>
                                    <div>
                                        <svg class="icon-line-color">
                                            <use
                                                xlink:href="../assets/svg/icons.svg#line-straight"></use>
                                        </svg>
                                    </div>
                                </div>
                                <a href="services.html"><h3>Property Insurance</h3></a>
                                <p class="font-roboto">Elegant retreat in a quiet Coral Gables setting. This home provides wonderful entertaining spaces with a chef
                                    kitchen opening…</p>
                                <a href="services.html" class="btn btn-light-bg color-2"><span>view more</span></a>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="service-box">
                                <div class="hover-line">
                                    <svg class="service-icon">
                                        <use
                                            xlink:href="../assets/svg/icons.svg#customer-service"></use>
                                    </svg>
                                    <div>
                                        <svg class="icon-line-color">
                                            <use
                                                xlink:href="../assets/svg/icons.svg#line-straight"></use>
                                        </svg>
                                    </div>
                                </div>
                                <a href="services.html"><h3>Fastest Service</h3></a>
                                <p class="font-roboto"> This home provides wonderful entertaining spaces with a chef
                                    kitchen opening… Elegant retreat in a quiet Coral Gables setting.</p>
                                <a href="services.html" class="btn btn-light-bg color-2"><span>view more</span></a>
                            </div>
                        </div>
                        <div class="col-xl-4 offset-xl-0 offset-md-3 col-md-6">
                            <div class="service-box">
                                <div class="hover-line">
                                    <svg class="service-icon">
                                        <use
                                            xlink:href="../assets/svg/icons.svg#shield"></use>
                                    </svg>
                                    <div>
                                        <svg class="icon-line-color">
                                            <use
                                                xlink:href="../assets/svg/icons.svg#line-straight"></use>
                                        </svg>
                                    </div>
                                </div>
                                <a href="services.html"><h3>Largest Real Estate</h3></a>
                                <p class="font-roboto">Elegant retreat in a quiet Coral Gables setting. This home provides wonderful entertaining spaces with a chef
                                    kitchen opening…</p>
                                <a href="services.html" class="btn btn-light-bg color-2"><span>view more</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service section end -->

    <!-- Our agent section start -->
    <section class="about-section slick-between about-inner ratio_square">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title-2">
                        <h2>Meet our Agent</h2>
                        <p>Discover New York’s best things to do, restaurants, theatre, nightlife and more</p>
                    </div>
                    <div class="about-1 about-wrap arrow-white">

                        @forelse (DB::table('users')->where('agent_status','yes')->get() as $user)
                        <div>
                            <div class="about-content row">
                                <div class="col-xl-6">
                                    <div class="about-image">
                                        <div>
                                            @if ($user->image_path != "")
                <img src="{{ URL::asset('images/'.$user->image_path) }}" class="img-fluid update_img" alt=""> 
                @else
                <img src="../assets/images/about/1.jpg" class="img-fluid update_img" alt="">
                {{-- <img src="../assets/images/about/1.jpg" class="img-fluid update_img" alt="">   --}}
                @endif
                                        </div>
                                        <div class="about-overlay"></div>
                                        <div class="overlay-content">
                                            <ul>
                                               
                                                <li><a href="{{ $user->twitter_link }}"><img src="../assets/images/about/icon-2.png" alt=""></a>
                                                </li>
                                                <li><a href="{{ $user->facebook_link }}"><img src="../assets/images/about/icon-3.png" alt=""></a>
                                                </li>
                                            </ul>
                                            <span>Connect</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="our-details">
                                        <a href="{{ route('agency-profile',['id'=>$user->id]) }}"><h6 class="d-flex">{{ $user->lastname." ".$user->firstname }} <span class="label-heart color-2 ms-2"><i
                                                    class="fas fa-heart"></i></span></h6></a>
                                        <h3>Agent</h3>
                                        <span class="font-roboto"><i data-feather="mail" class="me-1"></i>{{ $user->email }}</span>
                                        <p class="font-roboto">{{ $user->about_agent }}</p>
                                        <a href="{{ route('agency-profile',['id'=>$user->id]) }}" class="btn btn-gradient btn-pill color-2 mt-2"><i data-feather="eye"></i>View Portfolio</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @empty
                        <div>
                            <div class="about-content row">
                                <div class="col-xl-6">
                                    <div class="about-image">
                                        <div>
                                            <img src="../assets/images/about/1.jpg" class="img-fluid bg-img" alt="">
                                        </div>
                                        <div class="about-overlay"></div>
                                        <div class="overlay-content">
                                            <ul>
                                                <li><a href="https://accounts.google.com/"><img src="../assets/images/about/icon-1.png" alt=""></a>
                                                </li>
                                                <li><a href="https://twitter.com/"><img src="../assets/images/about/icon-2.png" alt=""></a>
                                                </li>
                                                <li><a href="https://www.facebook.com/"><img src="../assets/images/about/icon-3.png" alt=""></a>
                                                </li>
                                            </ul>
                                            <span>Connect</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="our-details">
                                        <a href="agent-profile.html"><h6 class="d-flex">Olive Yew <span class="label-heart color-2 ms-2"><i
                                                    class="fas fa-heart"></i></span></h6></a>
                                        <h3>Civil engineer</h3>
                                        <span class="font-roboto"><i data-feather="mail" class="me-1"></i>olive@yew.com</span>
                                        <p class="font-roboto">Residences can be classified by and how they are connected to neighbouring residences and land</p>
                                        <a href="agent-profile.html" class="btn btn-gradient btn-pill color-2 mt-2"><i data-feather="eye"></i>View Portfolio</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="about-content row">
                                <div class="col-xl-6">
                                    <div class="about-image">
                                        <div>
                                            <img src="../assets/images/about/1.jpg" class="img-fluid bg-img" alt="">
                                        </div>
                                        <div class="about-overlay"></div>
                                        <div class="overlay-content">
                                            <ul>
                                                <li><a href="https://accounts.google.com/"><img src="../assets/images/about/icon-1.png" alt=""></a>
                                                </li>
                                                <li><a href="https://twitter.com/"><img src="../assets/images/about/icon-2.png" alt=""></a>
                                                </li>
                                                <li><a href="https://www.facebook.com/"><img src="../assets/images/about/icon-3.png" alt=""></a>
                                                </li>
                                            </ul>
                                            <span>Connect</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="our-details">
                                        <a href="agent-profile.html"><h6 class="d-flex">Mark Andry <span class="label-heart color-2 ms-2"><i
                                                    class="fas fa-heart"></i></span></h6></a>
                                        <h3>Advised to consult </h3>
                                        <span class="font-roboto"><i data-feather="mail" class="me-1"></i>Robot@inspirythemes.com</span>
                                        <p class="font-roboto">Residences can be classified by and how they are connected to neighbouring residences and land</p>
                                        <a href="agent-profile.html" class="btn btn-gradient btn-pill color-2 mt-2"><i data-feather="eye"></i>View Portfolio</a>
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
    <!-- Our agent section end -->

    <!-- testimonial section start -->
    <section class="bg-light about-people">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title-2">
                        <h2>What People Say</h2>
                        <p>Cum doctus civibus efficiantur in imperdiet deterruisset.</p>
                    </div>
                    <div class="slick-between">
                        <div class="testimonial-1 dot-gradient">
                            <div>
                                <div class="pepole-comment">
                                    <div class="client-msg">
                                        <span class="quote"><img src="../assets/images/testimonial/quote.png"
                                                alt=""></span>
                                        <p>Life before Company was very chaotic — we got a lot of mistyped orders. So
                                            with Company, the ability to see the order directly from the customer makes
                                            it so streamlined.</p>
                                    </div>
                                    <div class="media">
                                        <img src="../assets/images/avatar/1.jpg" alt="">
                                        <div class="media-body">
                                            <h3>Elmer Harvy</h3>
                                            <span>CEO of Desees</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="pepole-comment">
                                    <div class="client-msg">
                                        <span class="quote"><img src="../assets/images/testimonial/quote.png"
                                                alt=""></span>
                                        <p>The ability to see the order directly from the customer makes
                                            it so streamlined. Life before Company was very chaotic — we got a lot of mistyped orders. So
                                            with Company.</p>
                                    </div>
                                    <div class="media">
                                        <img src="../assets/images/avatar/1.jpg" alt="">
                                        <div class="media-body">
                                            <h3>Elmer Harvy</h3>
                                            <span>CEO of Desees</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="pepole-comment">
                                    <div class="client-msg">
                                        <span class="quote"><img src="../assets/images/testimonial/quote.png"
                                                alt=""></span>
                                        <p>It won’t be easy, but buying my own home has been a lifelong dream, and knowing that I will only get out of it what I put into it, I’m ready to get a little sweat on my brow and realize my dream to its fullest.</p>
                                    </div>
                                    <div class="media">
                                        <img src="../assets/images/avatar/1.jpg" alt="">
                                        <div class="media-body">
                                            <h3>Elmer Harvy</h3>
                                            <span>CEO of Desees</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <div class="pepole-comment">
                                    <div class="client-msg">
                                        <span class="quote"><img src="../assets/images/testimonial/quote.png"
                                                alt=""></span>
                                        <p>The ability to see the order directly from the customer makes
                                            it so streamlined. Life before Company was very chaotic — we got a lot of mistyped orders. So
                                            with Company.</p>
                                    </div>
                                    <div class="media">
                                        <img src="../assets/images/avatar/1.jpg" alt="">
                                        <div class="media-body">
                                            <h3>Elmer Harvy</h3>
                                            <span>CEO of Desees</span>
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
    <!-- testimonial section end -->

@endsection