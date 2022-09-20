@extends('layouts.app')

@section('content')




    <!-- breadcrumb start -->
    <section class="breadcrumb-section p-0">
        <img src="../assets/images/inner-background.jpg" class="bg-img img-fluid" alt="">
        <div class="container">
            <div class="breadcrumb-content">
                <div>
                    <h2>Services</h2>
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Services</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- our service section start -->
    <section class="provide-service bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 order-lg-1">
                    <div class="service-img">
                        <img src="../assets/images/inner-pages/2.png" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="provide-details">
                        <h2>Providing <br/>
                            the best customer service</h2>
                        <p class="font-roboto">Residences can be classified by and how they are connected to neighbouring residences and land. 
                            Different types of housing tenure can be used for the same physical type. For example, 
                            connected residences might be owned by a single entity and leased out, or owned separately with an agreement 
                            covering the relationship between units and common areas and concerns. Residences can be classified by and 
                            ow they are connected to neighbouring residences and land.</p>
                        <button onclick="document.location='{{ route('login') }}'" type="button" class="btn btn-gradient color-2 btn-pill">Learn more <i class="fas fa-arrow-right ms-1"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our service section end -->

    <!-- service section start -->
    <section class="service-section service-1">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="title-2">
                        <h2>Property Services</h2>
                        <p>Discover New York’s best things to do, restaurants, theatre, nightlife and more</p>
                    </div>
                    <div class="row property-service column-space">
                        <div class="col-xl-4 col-md-6">
                            <div class="service-box">
                                <div class="icon-round">
                                    <i data-feather="home"></i>
                                </div>
                                <h3><a href="services.html">Property Management</a></h3>
                                <p>Property management is the control, maintenance of real estate and physical property.</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="service-box">
                                <div class="icon-round">
                                    <i data-feather="dollar-sign"></i>
                                </div>
                                <h3><a href="services.html">Mortgage Services</a></h3>
                                <p>Elegant retreat in Gables setting. This home provides entertaining spaces with
                                    kitchen opening</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="service-box">
                                <div class="icon-round">
                                    <i data-feather="settings"></i>
                                </div>
                                <h3><a href="services.html">Currency Services</a></h3>
                                <p>A currency is standardization of money in any form when use or circulation as medium of exchange.</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="service-box">
                                <div class="icon-round">
                                    <i data-feather="bell"></i>
                                </div>
                                <h3><a href="services.html">Get important notifications</a></h3>
                                <p>Elegant retreat in Gables setting. This home provides entertaining spaces with
                                    kitchen opening</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="service-box">
                                <div class="icon-round">
                                    <i data-feather="book-open"></i>
                                </div>
                                <h3><a href="services.html">Transparency</a></h3>
                                <p>Apartments or flats on each floor and with shared entrance stairway access found in Britain.</p>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <div class="service-box">
                                <div class="icon-round">
                                    <i data-feather="map-pin"></i>
                                </div>
                                <h3><a href="services.html">Near by me</a></h3>
                                <p>Elegant retreat in Gables setting. This home provides entertaining spaces with
                                    kitchen opening</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service section end -->

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