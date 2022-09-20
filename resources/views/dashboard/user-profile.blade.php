<!-- datepicker css -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/datepicker.min.css') }}">

@extends('layouts.app')

@livewireStyles
@section('content')
    <!-- breadcrumb start -->
    <section class="breadcrumb-section p-0">
        <img src="../assets/images/inner-background.jpg" class="bg-img img-fluid" alt="">
        <div class="container">
            <div class="breadcrumb-content">
                <div>
                    <h2>Dashboard</h2>
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">My profile</li>
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
                @include('layouts.dashboard-nav')
                <div class="col-lg-9">
                    <div class="dashboard-content">
                        <div class="my-profile" id="profile">
                            <div class="profile-info">
                                @livewire('update-profile')
                                @livewire('change-password')
                                @livewire('change-email')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- user dashboard section end -->
@endsection

<!-- log out modal start -->
<div class="modal fade edit-profile-modal logout-modal" id="logout">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Logging out</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h6>Are you sure ? you want to log out.</h6>
                <p>Once you will be logged out and will be unable to log in back.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-dashed color-2" data-bs-dismiss="modal">no</button>
                <button type="button" onclick="document.location='layout-2.html'"
                    class="btn btn-gradient color-2">yes</button>
            </div>
        </div>
    </div>
</div>
<!-- log out modal end -->

<!-- datepicker js-->
<script src="../assets/js/date-picker.js"></script>

<script>
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

    $('#datepicker').datepicker({
        uiLibrary: 'bootstrap4',
        format: 'dd mmmm yy'
    });
</script>

@livewireScripts
