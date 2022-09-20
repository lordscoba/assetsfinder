
   @extends('auth.layoutsauth.app')

   @section('content')
       
   <!-- breadcrumb start -->
    <section class="breadcrumb-section p-0">
        <img src="../assets/images/inner-background.jpg" class="bg-img img-fluid" alt="">
        <div class="container">
            <div class="breadcrumb-content">
                <div>
                    <h2>Forgot password</h2>
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Forgot password</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb end -->

    <!-- section start -->
    <section class="login-wrap">
        <div class="container">
            <div class="row log-in">
                <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10 col-12">
                    <div class="theme-card">
                    <div class="title-3 text-start">
                        <h2>Forgot your password</h2>
                    </div>
                    <form>
                        
                        <div class="form-group">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i data-feather="user"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control" placeholder="Enter Email" required>
                            </div>
                        </div>
                        <div>
                            <button type="submit" class="btn btn-gradient btn-pill color-2 me-sm-3 me-2">Send request</button>
                        </div>
                    </form>
                </div>
                </div>
            </div>
        </div>
    </section>
    <!-- section end -->
   @endsection
   
   


    <!-- Color-picker js-->
    <script src="../assets/js/color/template-color.js"></script>
    