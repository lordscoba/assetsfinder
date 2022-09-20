@extends('layouts.app')

@section('content')


    <!-- breadcrumb start -->
    <section class="breadcrumb-section p-0">
        <img src="../assets/images/inner-background.jpg" class="bg-img img-fluid" alt="">
        <div class="container">
            <div class="breadcrumb-content">
                <div>
                    <h2>Agent List</h2>
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Agent List</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- agent grid section start -->
    <section class="agent-section property-section">
        <div class="container">
            <div class="row ratio2_3">
                <div class="col-xl-9 col-lg-8 property-grid-3 agent-grids">
                    <div class="filter-panel">
                        <div class="top-panel">
                            <div>
                                <h2>Agent Listing</h2>
                            </div>
                        </div>

                    </div>
                    <div class="property-wrapper-grid list-view">
                        <div class="property-2 row column-sm property-label property-grid list-view">
                        @forelse (DB::table('users')->where('agent_status','yes')->get() as $agent)
                        <div class="col-md-12 col-xl-6 wow fadeInUp">
                            <div class="property-box">
                                <div class="agent-image">
                                    <div>
                                        @if ($agent->image_path != "")
                                        <img src="{{ URL::asset('images/'.$agent->image_path) }}" class="img-fluid" alt=""> 
                                        @else
                                        <img src="../assets/images/avatar/5.jpg" class="bg-img" alt="">
                                        {{-- <img src="../assets/images/about/1.jpg" class="img-fluid update_img" alt="">   --}}
                                        @endif

                                        
                                        <span class="label label-shadow">{{ DB::table('properties')->where('user_id',$agent->id)->count() }}</span>
                                        <div class="agent-overlay"></div>
                                        <div class="overlay-content">
                                            <ul>
                                                
                                                <li><a href="{{ $agent->twitter_link }}"><img src="../assets/images/about/icon-2.png" alt=""></a>
                                                </li>
                                                <li><a href="{{ $agent->facebook_link }}"><img src="../assets/images/about/icon-3.png" alt=""></a>
                                                </li>
                                            </ul>
                                            <span>Connect</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="agent-content">
                                    <h3><a href="">{{ $agent->lastname." ".$agent->firstname }}</a></h3>
                                    <p class="font-roboto">Real estate Agent</p>
                                    <ul class="agent-contact">
                                        <li>
                                            <i class="fas fa-phone-alt"></i> 
                                            <span class="phone-number">{{ $agent->phone_number }}</span>
                                            <span class="character">+********</span>
                                            <span class="label label-light label-flat color-2">
                                                show    
                                                <span>hide</span>
                                            </span>
                                        </li>
                                        <li><i class="fas fa-envelope"></i> {{ $agent->email }}</li>
                            
                                    </ul>
                                    <a href="{{ route('agent-profile',['id'=>$agent->id]) }}">View profile <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        
                        @empty
                        <div class="col-md-12 col-xl-6 wow fadeInUp">
                            <div class="property-box">
                                <div class="agent-image">
                                    <div>
                                        <img src="../assets/images/avatar/5.jpg" class="bg-img" alt="">
                                        <span class="label label-shadow">2 properties</span>
                                        <div class="agent-overlay"></div>
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
                                <div class="agent-content">
                                    <h3><a href="agent-profile.html">Zack Lee</a></h3>
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
                                        <li><i class="fas fa-fax"></i>
                                            <span> 247 054 787 </span>
                                            </li>
                                    </ul>
                                    <a href="agent-profile.html">View profile <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        @endforelse
                            
                           
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4">
                    <div class="left-sidebar single-sidebar sticky-cls">
                        <div class="filter-cards">
                            
                           <div class="advance-card feature-card">
                                <h6>Featured</h6>
                                <div class="feature-slider">
                                    <div>
                                        <img src="../assets/images/property/4.jpg" class="bg-img" alt="">
                                        <div class="bottom-feature">
                                            <h5>Neverland</h5>
                                            <h6>$13,000 <small>/ start from</small></h6>
                                        </div>
                                    </div>
                                    <div>
                                        <img src="../assets/images/property/16.jpg" class="bg-img" alt="">
                                        <div class="bottom-feature">
                                            <h5>Neverland</h5>
                                            <h6>$13,000 <small>/ start from</small></h6>
                                        </div>
                                    </div>
                                    <div>
                                        <img src="../assets/images/property/14.jpg" class="bg-img" alt="">
                                        <div class="bottom-feature">
                                            <h5>Neverland</h5>
                                            <h6>$13,000 <small>/ start from</small></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="labels-left">
                                    <span class="label label-success">featured</span>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- agent grid section end -->
    
@endsection


    <script>
        new WOW().init();

        // number js
        function isNumber(evt) {
            var iKeyCode = (evt.which) ? evt.which : evt.keyCode
            if (iKeyCode != 46 && iKeyCode > 31 && (iKeyCode < 48 || iKeyCode > 57))
                return false;

            return true;
        }    
        function maxLengthCheck(object)
        {
            if (object.value.length > object.maxLength)
            object.value = object.value.slice(0, object.maxLength)
        }

        (function($) {
            "use strict";
            // colorpicker js
            var color_picker3 = document.getElementById("ColorPicker3").value;
            document.getElementById("ColorPicker3").onchange = function() {
                color_picker3 = this.value;
                document.documentElement.style.setProperty('--theme-default3', color_picker3);
            };

            var color_picker4 = document.getElementById("ColorPicker4").value;
            document.getElementById("ColorPicker4").onchange = function() {
                color_picker4 = this.value;
                document.documentElement.style.setProperty('--theme-default4', color_picker4);
            };
        })(jQuery);

        // show number 
        $(".agent-contact > li .label").click(function(){
            $(this).parent().toggleClass("show");
        });
    </script>