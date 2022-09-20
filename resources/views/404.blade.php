@extends('layouts.app')

@section('content')
       <!-- section start -->
       <section class="error-section small-section">
        <div class="container">
            <div class="row">
                <div class="col text-center not-found">
                    <img src="../assets/images/inner-pages/2.svg" class="img-fluid" alt="">
                    <h2>Whoops! something went wrong ?</h2>
                    <p class="font-roboto">we are sorry but the page you are looking for doesn't exist or has been removed. please check or search again.</p>
                    <div class="btns">
                        <a href="layout-4.html" class="btn btn-gradient color-4">go to home page</a>
                        <a href="javascript:void(0)" class="btn btn-dashed color-4 ms-2">Report problem</a>
                    </div>
                </div>
            </div>
        </div>
</section>
<!-- section end -->

<!-- tap to top start -->
<div class="tap-top">
    <div>
        <i class="fas fa-arrow-up"></i>
    </div>
</div>
<!-- tap to top end -->

<!-- customizer start -->
<div class="customizer-wrap">
    <div class="customizer-links">
        <i data-feather="settings"></i>
    </div>
    <div class="customizer-contain custom-scrollbar">
        <div class="setting-back">
            <i data-feather="x"></i>
        </div>
        <div class="layouts-settings">
            <div class="customizer-title">
                <h6 class="color-4">Layout type</h6>
            </div>
            <div class="option-setting">
                <span>Light</span>
                <label class="switch">
                    <input type="checkbox" name="chk1" value="option" class="setting-check"><span class="switch-state"></span>
                </label>
                <span>Dark</span>
            </div>
        </div>
        <div class="layouts-settings">
            <div class="customizer-title">
                <h6 class="color-4">Layout Direction</h6>
            </div>
            <div class="option-setting">
                <span>LTR</span>
                <label class="switch">
                    <input type="checkbox" name="chk2" value="option" class="setting-check1"><span class="switch-state"></span>
                </label>
                <span>RTL</span>
            </div>
        </div>
        <div class="layouts-settings">
            <div class="customizer-title">
                <h6 class="color-4">Unlimited Color</h6>
            </div>
            <div class="option-setting unlimited-color-layout">
                <div class="form-group">
                    <label for="ColorPicker6">color 6</label>
                    <input id="ColorPicker6" type="color" value="#f35d43" name="Default">
                </div>
                <div class="form-group">
                    <label for="ColorPicker7">color 7</label>
                    <input id="ColorPicker7" type="color" value="#f34451" name="Default"> 
                </div>
            </div>
        </div>
    </div>
</div>
<!-- customizer end -->


@endsection
 