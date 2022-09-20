
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
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Agency Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->
    <br>
    <a class="btn btn-primary btn-lg" href=" {{ url()->previous() }} "> Previous page</a>

    <!-- agent profile section start -->
    <section class="agent-section property-section">
        <div class="container">
            <div class="row ratio_63">
                {{-- <div class="col-lg-3">
                    @include('layouts.admin-nav')
                </div> --}}
                <div class="col-xl-9 col-lg-8 property-grid-2">
                    <div class="our-agent theme-card">
                        <div class="row">
                            <div class="col-sm-6 ratio_landscape">
                                <div class="agent-image">
                                    <img src="../../../assets/images/agency/5.png" class="img-fluid bg-img" alt="">
                                    <span class="label label-shadow">10 Properties</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="agent-wrap">
                                    <div class="our-agent-details">
                                        <h3>{{ $agencies->name }}</h3>
                                        <h6>Dream house</h6>
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
                                        <li><a href="{{ $agencies->facebook_link }}" class="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="{{ $agencies->twitter_link }}" class="twitter"><i class="fab fa-twitter"></i></a></li>
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
                        <div class="col-xl-4 col-md-6 wow fadeInUp">
                            <div class="property-box">
                                <div class="agent-image">
                                    <div>
                                        <img src="../../../assets/images/avatar/5.jpg" class="bg-img" alt="">
                                        <span class="label label-shadow">2 properties</span>
                                        <div class="agent-overlay"></div>
                                        <div class="overlay-content">
                                            <ul>
                                                <li><a href="https://accounts.google.com/"><img src="../../../assets/images/about/icon-1.png" alt=""></a>
                                                </li>
                                                <li><a href="https://twitter.com/"><img src="../../../assets/images/about/icon-2.png" alt=""></a>
                                                </li>
                                                <li><a href="https://www.facebook.com/"><img src="../../../assets/images/about/icon-3.png" alt=""></a>
                                                </li>
                                            </ul>
                                            <span>Connect</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="agent-content">
                                    <h3><a href="agency-profile.html">Zack Lee</a></h3>
                                    <p class="font-roboto">Real estate Agent</p>
                                    <ul class="agent-contact">
                                        <li>
                                            <i class="fas fa-phone-alt"></i> 
                                            <span class="phone-number">+91 426015400</span>
                                            <span class="character">+91 42601****</span>
                                            <span class="label label-light label-flat color-2">
                                                show    
                                                <span>hide</span>
                                            </span>
                                        </li>
                                        <li><i class="fas fa-envelope"></i> zack@gmail.com</li>
                                        <li><i class="fas fa-fax"></i> 247 054 787</li>
                                    </ul>
                                    <a href="agent-profile.html">View profile <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 wow fadeInUp">
                            <div class="property-box">
                                <div class="agent-image">
                                    <div>
                                        <img src="../../../assets/images/avatar/3.jpg" class="bg-img" alt="">
                                        <span class="label label-shadow">3 properties</span>
                                        <div class="agent-overlay"></div>
                                        <div class="overlay-content">
                                            <ul>
                                                <li><a href="https://accounts.google.com/"><img src="../../../assets/images/about/icon-1.png" alt=""></a>
                                                </li>
                                                <li><a href="https://twitter.com/"><img src="../../../assets/images/about/icon-2.png" alt=""></a>
                                                </li>
                                                <li><a href="https://www.facebook.com/"><img src="../../../assets/images/about/icon-3.png" alt=""></a>
                                                </li>
                                            </ul>
                                            <span>Connect</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="agent-content">
                                    <h3><a href="agency-profile.html">Greta Life</a></h3>
                                    <p class="font-roboto">Real estate agent</p>
                                    <ul class="agent-contact">
                                        <li>
                                            <i class="fas fa-phone-alt"></i> 
                                            <span class="phone-number">+91 5470087201</span>
                                            <span class="character">+91 547008****</span>
                                            <span class="label label-light label-flat color-2">
                                                show    
                                                <span>hide</span>
                                            </span>
                                        </li>
                                        <li><i class="fas fa-envelope"></i> life@gmail.in</li>
                                        <li><i class="fas fa-fax"></i> 248 200 325</li>
                                    </ul>
                                    <a href="agent-profile.html">View profile <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 wow fadeInUp">
                            <div class="property-box">
                                <div class="agent-image">
                                    <div>
                                        <img src="../../../assets/images/avatar/2.jpg" class="bg-img" alt="">
                                        <span class="label label-shadow">6 properties</span>
                                        <div class="agent-overlay"></div>
                                        <div class="overlay-content">
                                            <ul>
                                                <li><a href="https://accounts.google.com/"><img src="../../../assets/images/about/icon-1.png" alt=""></a>
                                                </li>
                                                <li><a href="https://twitter.com/"><img src="../../../assets/images/about/icon-2.png" alt=""></a>
                                                </li>
                                                <li><a href="https://www.facebook.com/"><img src="../../../assets/images/about/icon-3.png" alt=""></a>
                                                </li>
                                            </ul>
                                            <span>Connect</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="agent-content">
                                    <h3><a href="agency-profile.html">Bob Frapples</a></h3>
                                    <p class="font-roboto">Sales Executive</p>
                                    <ul class="agent-contact">
                                        <li>
                                            <i class="fas fa-phone-alt"></i> 
                                            <span class="phone-number">+91 2714203587</span>
                                            <span class="character">+91 271420****</span>
                                            <span class="label label-light label-flat color-2">
                                                show    
                                                <span>hide</span>
                                            </span>
                                        </li>
                                        <li><i class="fas fa-envelope"></i> bob@gmail.in</li>
                                        <li><i class="fas fa-fax"></i> 571 241 925</li>
                                    </ul>
                                    <a href="agent-profile.html">View profile <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="agent-property">
                        <div class="filter-panel">
                            <div class="top-panel">
                                <div>
                                    <h3>Properties Listing</h3>
                                    <span class="show-result">Showing <span>1-15 of 69</span> Listings</span>
                                </div>
                                <ul class="grid-list-filter">
                                    <li>
                                        <div class="dropdown">
                                            <span class="dropdown-toggle font-rubik" data-bs-toggle="dropdown"><span>Sort by
                                                    Newest</span> <i class="fas fa-angle-down ms-lg-3 ms-2"></i></span>
                                            <div class="dropdown-menu text-start">
                                                <a class="dropdown-item" href="javascript:void(0)">Sort by Newest</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Sort by Oldest</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Sory by featured</a>
                                                <a class="dropdown-item" href="javascript:void(0)">Sort by price(Low to
                                                    high)</a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="grid-btn active">
                                        <a href="javascript:void(0)">
                                            <i data-feather="grid"></i>
                                        </a>
                                    </li>
                                    <li class="list-btn">
                                        <a href="javascript:void(0)">
                                            <i data-feather="list"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
    
                        </div>
                        <div class="property-2 row column-sm zoom-gallery property-label property-grid">
                            <div class="col-md-6 wow fadeInUp">
                                <div class="property-box">
                                    <div class="property-image">
                                        <div class="property-slider">
                                            <a href="javascript:void(0)">
                                                <img src="../../../assets/images/property/10.jpg" class="bg-img" alt="">
                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../../../assets/images/property/5.jpg" class="bg-img" alt="">
                                                
                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../../../assets/images/property/3.jpg" class="bg-img" alt="">
                                                
                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../../../assets/images/property/4.jpg" class="bg-img" alt="">
                                                
                                            </a>
                                        </div>
                                        <div class="labels-left">
                                            <div>
                                                <span class="label label-shadow">sale</span>
                                            </div>
                                        </div>
                                        <div class="seen-data">
                                            <i data-feather="camera"></i>
                                            <span>11</span>
                                        </div>                 
                                        <div class="overlay-property-box">
                                            <a href="compare.html" class="effect-round" data-bs-toggle="tooltip" data-bs-placement="left" title="Compare"> 
                                                <i data-feather="shuffle"></i>
                                            </a>
                                            <a href="user-favourites.html" class="effect-round like" data-bs-toggle="tooltip" data-bs-placement="left" title="wishlist">
                                                <i data-feather="heart"></i>                                                                               
                                            </a>
                                        </div>
                                    </div>

                                    <div class="property-details">
                                        <span class="font-roboto">France</span>
                                        <a href="single-property-8.html">
                                            <h3>Little Acorn Farm</h3>
                                        </a>
                                        <h6>$6558.00*</h6>
                                        <p class="font-roboto">Elegant retreat in a quiet Coral Gables setting. This home provides wonderful entertaining spaces with a chef
                                            kitchen opening…</p>
                                        <ul>
                                            <li><img src="../../../assets/images/svg/icon/double-bed.svg" class="img-fluid" alt="">Bed : 4</li>
                                            <li><img src="../../../assets/images/svg/icon/bathroom.svg" class="img-fluid" alt="">Baths : 4</li>
                                            <li><img src="../../../assets/images/svg/icon/square-ruler-tool.svg" class="img-fluid ruler-tool" alt="">Sq Ft : 5000</li>
                                        </ul>
                                        <div class="property-btn d-flex">
                                            <span>August 4, 2022</span>
                                            <button type="button"  onclick="document.location='single-property-8.html'" class="btn btn-dashed btn-pill color-2">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInUp">
                                <div class="property-box">
                                    <div class="property-image">
                                        <div class="property-slider">
                                            <a href="javascript:void(0)">
                                                <img src="../../../assets/images/property/11.jpg" class="bg-img" alt="">
                                                
                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../../../assets/images/property/4.jpg" class="bg-img" alt="">
                                                
                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../../../assets/images/property/6.jpg" class="bg-img" alt="">
                                                
                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../../../assets/images/property/2.jpg" class="bg-img" alt="">
                                                
                                            </a>
                                        </div>
                                        <div class="labels-left">
                                            <div>
                                                <span class="label label-shadow">sale</span>
                                            </div>
                                        </div>
                                        <div class="seen-data">
                                            <i data-feather="camera"></i>
                                            <span>12</span>
                                        </div>                 
                                        <div class="overlay-property-box">
                                            <a href="compare.html" class="effect-round" data-bs-toggle="tooltip" data-bs-placement="left" title="Compare"> 
                                                <i data-feather="shuffle"></i>
                                            </a>
                                            <a href="user-favourites.html" class="effect-round like" data-bs-toggle="tooltip" data-bs-placement="left" title="wishlist">
                                                <i data-feather="heart"></i>                                                                               
                                            </a>
                                        </div>
                                    </div>
                                    <div class="property-details">
                                        <span class="font-roboto">France</span>
                                        <a href="single-property-8.html">
                                            <h3>Allen's Across Way</h3>
                                        </a>
                                        <h6>$6558.00*</h6>
                                        <p class="font-roboto"> An interior designer is someone who plans,researches,coordinates,management and manages such enhancement projects.</p>
                                        <ul>
                                            <li><img src="../../../assets/images/svg/icon/double-bed.svg" class="img-fluid" alt="">Bed : 4</li>
                                            <li><img src="../../../assets/images/svg/icon/bathroom.svg" class="img-fluid" alt="">Baths : 4</li>
                                            <li><img src="../../../assets/images/svg/icon/square-ruler-tool.svg" class="img-fluid ruler-tool" alt="">Sq Ft : 5000</li>
                                        </ul>
                                        <div class="property-btn d-flex">
                                            <span>June 20, 2022</span>
                                            <button type="button"  onclick="document.location='single-property-8.html'" class="btn btn-dashed btn-pill color-2">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInUp">
                                <div class="property-box">
                                    <div class="property-image">
                                        <div class="property-slider">
                                            <a href="javascript:void(0)">
                                                <img src="../../../assets/images/property/14.jpg" class="bg-img" alt="">
                                                
                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../../../assets/images/property/6.jpg" class="bg-img" alt="">
                                                
                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../../../assets/images/property/10.jpg" class="bg-img" alt="">
                                                
                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../../../assets/images/property/9.jpg" class="bg-img" alt="">
                                                
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
                                            <span>13</span>
                                        </div>                 
                                        <div class="overlay-property-box">
                                            <a href="compare.html" class="effect-round" data-bs-toggle="tooltip" data-bs-placement="left" title="Compare"> 
                                                <i data-feather="shuffle"></i>
                                            </a>
                                            <a href="user-favourites.html" class="effect-round like" data-bs-toggle="tooltip" data-bs-placement="left" title="wishlist">
                                                <i data-feather="heart"></i>                                                                               
                                            </a>
                                        </div>
                                    </div>
                                    <div class="property-details">
                                        <span class="font-roboto">brazil</span>
                                        <a href="single-property-8.html">
                                            <h3>Hidden Spring Hideway</h3>
                                        </a>
                                        <h6>$9554.00*</h6>
                                        <p class="font-roboto">The most common and most absolute type of estate, the tenant enjoys the greatest discretion over the disposal of the property.</p>
                                        <ul>
                                            <li><img src="../../../assets/images/svg/icon/double-bed.svg" class="img-fluid" alt="">Bed : 4</li>
                                            <li><img src="../../../assets/images/svg/icon/bathroom.svg" class="img-fluid" alt="">Baths : 4</li>
                                            <li><img src="../../../assets/images/svg/icon/square-ruler-tool.svg" class="img-fluid ruler-tool" alt="">Sq Ft : 5000</li>
                                        </ul>
                                        <div class="property-btn d-flex">
                                            <span>July 18, 2022</span>
                                            <button type="button"  onclick="document.location='single-property-8.html'" class="btn btn-dashed btn-pill color-2">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInUp">
                                <div class="property-box">
                                    <div class="property-image">
                                        <div class="property-slider">
                                            <a href="javascript:void(0)">
                                                <img src="../../../assets/images/property/15.jpg" class="bg-img" alt="">
                                                
                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../../../assets/images/property/4.jpg" class="bg-img" alt="">
                                                
                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../../../assets/images/property/6.jpg" class="bg-img" alt="">
                                                
                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../../../assets/images/property/9.jpg" class="bg-img" alt="">
                                                
                                            </a>
                                        </div>
                                        <div class="labels-left">
                                            <div>
                                                <span class="label label-shadow">sale</span>
                                            </div>
                                        </div>
                                        <div class="seen-data">
                                            <i data-feather="camera"></i>
                                            <span>14</span>
                                        </div>                 
                                        <div class="overlay-property-box">
                                            <a href="compare.html" class="effect-round" data-bs-toggle="tooltip" data-bs-placement="left" title="Compare"> 
                                                <i data-feather="shuffle"></i>
                                            </a>
                                            <a href="user-favourites.html" class="effect-round like" data-bs-toggle="tooltip" data-bs-placement="left" title="wishlist">
                                                <i data-feather="heart"></i>                                                                               
                                            </a>
                                        </div>
                                    </div>
                                    <div class="property-details">
                                        <span class="font-roboto">usa</span>
                                        <a href="single-property-8.html">
                                            <h3>Merrick in Spring Way</h3>
                                        </a>
                                        <h6>$4513.00*</h6>
                                        <p class="font-roboto">This home provides wonderful entertaining spaces with a chef
                                            kitchen opening. Elegant retreat in a quiet Coral Gables setting.</p>
                                        <ul>
                                            <li><img src="../../../assets/images/svg/icon/double-bed.svg" class="img-fluid" alt="">Bed : 4</li>
                                            <li><img src="../../../assets/images/svg/icon/bathroom.svg" class="img-fluid" alt="">Baths : 4</li>
                                            <li><img src="../../../assets/images/svg/icon/square-ruler-tool.svg" class="img-fluid ruler-tool" alt="">Sq Ft : 5000</li>
                                        </ul>
                                        <div class="property-btn d-flex">
                                            <span>January 6, 2022</span>
                                            <button type="button"  onclick="document.location='single-property-8.html'" class="btn btn-dashed btn-pill color-2">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInUp">
                                <div class="property-box">
                                    <div class="property-image">
                                        <div class="property-slider">
                                            <a href="javascript:void(0)">
                                                <img src="../../../assets/images/property/12.jpg" class="bg-img" alt="">
                                                
                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../../../assets/images/property/10.jpg" class="bg-img" alt="">
                                                
                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../../../assets/images/property/6.jpg" class="bg-img" alt="">
                                                
                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../../../assets/images/property/9.jpg" class="bg-img" alt="">
                                                
                                            </a>
                                        </div>
                                        <div class="labels-left">
                                            <div>
                                                <span class="label label-shadow">sale</span>
                                            </div>
                                        </div>
                                        <div class="seen-data">
                                            <i data-feather="camera"></i>
                                            <span>15</span>
                                        </div>                 
                                        <div class="overlay-property-box">
                                            <a href="compare.html" class="effect-round" data-bs-toggle="tooltip" data-bs-placement="left" title="Compare"> 
                                                <i data-feather="shuffle"></i>
                                            </a>
                                            <a href="user-favourites.html" class="effect-round like" data-bs-toggle="tooltip" data-bs-placement="left" title="wishlist">
                                                <i data-feather="heart"></i>                                                                               
                                            </a>
                                        </div>
                                    </div>
                                    <div class="property-details">
                                        <span class="font-roboto">usa</span>
                                        <a href="single-property-8.html">
                                            <h3>Home in Merrick Way</h3>
                                        </a>
                                        <h6>$4513.00*</h6>
                                        <p class="font-roboto">The most common and most absolute type of estate, the tenant enjoys the greatest discretion over the disposal of the property.</p>
                                        <ul>
                                            <li><img src="../../../assets/images/svg/icon/double-bed.svg" class="img-fluid" alt="">Bed : 4</li>
                                            <li><img src="../../../assets/images/svg/icon/bathroom.svg" class="img-fluid" alt="">Baths : 4</li>
                                            <li><img src="../../../assets/images/svg/icon/square-ruler-tool.svg" class="img-fluid ruler-tool" alt="">Sq Ft : 5000</li>
                                        </ul>
                                        <div class="property-btn d-flex">
                                            <span>January 6, 2022</span>
                                            <button type="button"  onclick="document.location='single-property-8.html'" class="btn btn-dashed btn-pill color-2">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 wow fadeInUp">
                                <div class="property-box">
                                    <div class="property-image">
                                        <div class="property-slider">
                                            <a href="javascript:void(0)">
                                                <img src="../../../assets/images/property/16.jpg" class="bg-img" alt="">
                                                
                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../../../assets/images/property/5.jpg" class="bg-img" alt="">
                                                
                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../../../assets/images/property/4.jpg" class="bg-img" alt="">
                                                
                                            </a>
                                            <a href="javascript:void(0)">
                                                <img src="../../../assets/images/property/3.jpg" class="bg-img" alt="">
                                                
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
                                            <span>16</span>
                                        </div>                 
                                        <div class="overlay-property-box">
                                            <a href="compare.html" class="effect-round" data-bs-toggle="tooltip" data-bs-placement="left" title="Compare"> 
                                                <i data-feather="shuffle"></i>
                                            </a>
                                            <a href="user-favourites.html" class="effect-round like" data-bs-toggle="tooltip" data-bs-placement="left" title="wishlist">
                                                <i data-feather="heart"></i>                                                                               
                                            </a>
                                        </div>
                                    </div>
                                    <div class="property-details">
                                        <span class="font-roboto">brazil</span>
                                        <a href="single-property-8.html">
                                            <h3>Magnolia Ranch</h3>
                                        </a>
                                        <h6>$9554.00*</h6>
                                        <p class="font-roboto">Real estate market in most countries are not as organize or efficient as markets for other, more liquid investment instruments.</p>
                                        <ul>
                                            <li><img src="../../../assets/images/svg/icon/double-bed.svg" class="img-fluid" alt="">Bed : 4</li>
                                            <li><img src="../../../assets/images/svg/icon/bathroom.svg" class="img-fluid" alt="">Baths : 4</li>
                                            <li><img src="../../../assets/images/svg/icon/square-ruler-tool.svg" class="img-fluid ruler-tool" alt="">Sq Ft : 5000</li>
                                        </ul>
                                        <div class="property-btn d-flex">
                                            <span>May 14, 2022</span>
                                            <button type="button"  onclick="document.location='single-property-8.html'" class="btn btn-dashed btn-pill color-2">Details</button>
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
    <!-- agent profile section end -->

@endsection
