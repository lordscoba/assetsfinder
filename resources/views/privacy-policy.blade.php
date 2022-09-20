

@extends('layouts.app')

@section('content')


    <!-- breadcrumb start -->
    <section class="breadcrumb-section p-0">
        <img src="../assets/images/inner-background.jpg" class="bg-img img-fluid" alt="">
        <div class="container">
            <div class="breadcrumb-content">
                <div>
                    <h2>Privacy policy</h2>
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Privacy policy</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- section start -->
    <section class="user-dashboard terms-section">
        <div class="container">
            <div class="row log-in">
                <div class="col-xl-3 col-lg-4">
                    <div class="sidebar-user sticky-cls">
                        <div class="dashboard-list">
                            <h5>Related Topics</h5>
                            <ul class="nav nav-tabs right-line-tab">
                                <li class="nav-item"><a class="nav-link active"
                                        href="privacy-policy.html#intro">Information</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="privacy-policy.html#howuse">How We Use</a></li>
                                <li class="nav-item"><a class="nav-link"
                                        href="privacy-policy.html#thirdparty">Third-Party Privacy</a></li>
                                <li class="nav-item"><a class="nav-link" href="privacy-policy.html#advertising">Advertising</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="privacy-policy.html#dpr">GDPR Privacy</a></li>
                            </ul>
                            <div class="terms-bottom-content">
                                <img src="../assets/images/others/1.svg" alt="" class="img-fluid">
                                {{-- <a href="" class="btn btn-gradient color-2 btn-pill" download>Download Doc</a> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-9 col-lg-8 col-12">
                    <div class="theme-card">
                        <h2>Privacy policy for AssetsFinder</h2>
                        <div class="terms-wrap">
                            <div class="terms-wrapper">
                                <p>At AssetsFinder, accessible at AssetsFinder.com, one of our main priorities is the privacy of
                                    our visitors. This Privacy Policy document contains types of information that is
                                    collected and recorded by AssetsFinder and how we use it.</p>
                                <p>If you have additional questions or require more information about our Privacy
                                    Policy, do not hesitate to contact us through email at <a
                                        href="javascript:void(0)">support@AssetsFinder.com</a></p>
                            </div>
                            <div class="terms-wrapper" id="intro">
                                <h4>Information we collect</h4>
                                <p>The personal information that you are asked to provide, and the reasons why you are
                                    asked to provide it, will be made clear to you at the point we ask you to provide
                                    your personal information.</p>
                                <p>If you contact us directly, we may receive additional information about you such as
                                    your name, email address, phone number, the contents of the message and/or
                                    attachments you may send us, and any other information you may choose to provide.
                                </p>
                            </div>
                            <div class="terms-wrapper" id="howuse">
                                <h4>How we use your information</h4>
                                <p>We use the information we collect in various ways, including to:</p>
                                <ul>
                                    <li>
                                        Understand and analyze how you use our website
                                    </li>
                                    <li>
                                        Provide, operate, and maintain our website
                                    </li>
                                    <li>
                                        Develop new products, services, features, and functionality
                                    </li>
                                </ul>
                            </div>
                            <div class="terms-wrapper" id="thirdparty">
                                <h4>Third-Party Privacy Policies</h4>
                                <p>AssetsFinder's Privacy Policy does not apply to other advertisers or websites. Thus,
                                    we are advising you to consult the respective Privacy Policies of these third-party
                                    ad servers for more detailed information. It may include their practices and
                                    instructions about how to opt-out of certain options. You may find a complete list
                                    of these Privacy Policies and their links here: Privacy Policy Links.</p>
                                <p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers' respective websites. What Are Cookies?</p>
                            </div>
                            <div class="terms-wrapper" id="advertising">
                                <h4>Advertising Partners Privacy Policies</h4>
                                <p>You may consult this list to find the Privacy Policy for each of the advertising partners of AssetsFinder.</p>
                                <p>Third-party ad servers or ad networks uses technologies like cookies, JavaScript, or Web Beacons that are used in their respective advertisements and links that appear on Website Name, which are sent directly to users' browser. </p>
                                <p>Note that AssetsFinder has no access to or control over these cookies that are used by third-party advertisers.</p>
                            </div>
                            <div class="terms-wrapper" id="dpr">
                                <h4>GDPR Privacy Policy (Data Protection Rights)</h4>
                                <p>We would like to make sure you are fully aware of all of your data protection rights. Every user is entitled to the following:</p>
                                <p>The right to access – You have the right to request copies of your personal data. We may charge you a small fee for this service.</p>
                                <p>The right to rectification – You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->
    
@endsection
    

    <script>
        (function ($) {
            "use strict";
            // colorpicker js
            var color_picker3 = document.getElementById("ColorPicker3").value;
            document.getElementById("ColorPicker3").onchange = function () {
                color_picker3 = this.value;
                document.documentElement.style.setProperty('--theme-default3', color_picker3);
            };

            var color_picker4 = document.getElementById("ColorPicker4").value;
            document.getElementById("ColorPicker4").onchange = function () {
                color_picker4 = this.value;
                document.documentElement.style.setProperty('--theme-default4', color_picker4);
            };

            // smooth scrolling js
            $(function () {
                $('a[href*="#"]').on("click", function () {
                    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')) {
                        var target = $(this.hash);
                        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                        if (target.length) {
                            $('html,body').animate({
                                scrollTop: target.offset().top
                            }, 1000);
                            return false;
                        }
                    }
                });
            });

            $('.sidebar-user .nav .nav-item .nav-link').on("click", function () {
                $('.sidebar-user .nav .nav-item .nav-link').removeClass('active');
                $(this).addClass('active');
            });
        })(jQuery);
    </script>