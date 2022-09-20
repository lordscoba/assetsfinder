@extends('layouts.app')

@section('content')



    <!-- breadcrumb start -->
    <section class="breadcrumb-section p-0">
        <img src="../../../assets/images/inner-background.jpg" class="bg-img img-fluid" alt="">
        <div class="container">
            <div class="breadcrumb-content">
                <div>
                    <h2>Dashboard</h2>
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create Agency</li>
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
                    <div class="col-lg-3">
                        @include('layouts.admin-nav')
                    </div>
                    <div class="col-lg-9">
                        <div class="dashboard-content">
                            <div class="create-tab" id="create-property">
                                <div class="property-wizard common-card">
                                    <div class="common-header">
                                        <h5>Create Agency</h5>
                                    </div>
                                    <div class="create-property-form">
                                        <div class="form-inputs">
                                            <h6>Create Agency</h6>
                                            <form action="/admin/agencies" class="row gx-2 gx-sm-3" method="POST" enctype="multipart/form-data">
                                                @csrf
                                                @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li><br>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                                <div class="form-group col-sm-4">
                                                    <label>Agency Name</label>
                                                    <input name="name" type="text" class="form-control" placeholder="Enter your Agency Name">
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label>Email</label>
                                                    <input name="email" type="email" class="form-control" placeholder="Enter your Email">
                                                </div>

                                                <div class="form-group col-sm-4">
                                                    <label>Phone Number</label>
                                                    <input name="phone_number" type="text" class="form-control" placeholder="Enter your Phone Number">
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label>Fax Number</label>
                                                    <input name="fax_number" type="text" class="form-control" placeholder="Enter your Fax Number">
                                                </div>

                                                <div class="form-group col-sm-4">
                                                    <label>Address</label>
                                                    <input name="address" type="text" class="form-control" placeholder="Enter your address">
                                                </div>

                                                <div class="form-group col-sm-4">
                                                    <label>Website</label>
                                                    <input name="website" type="text" class="form-control" placeholder="Enter your website">
                                                </div>

                                                <div class="form-group col-sm-4">
                                                    <label>Facebook link</label>
                                                    <input name="facebook_link" type="text" class="form-control" placeholder="Enter your link">
                                                </div>

                                                <div class="form-group col-sm-4">
                                                    <label>twitter link</label>
                                                    <input name="twitter_link" type="text" class="form-control" placeholder="Enter your link">
                                                </div>

                                                <div class="form-group col-sm-4">
                                                    <label>Agency Logo</label>
                                                    <input name="image" type="file" class="form-control" placeholder="Enter your link">
                                                </div>

                                                <div class="form-group col-sm-12">
                                                    <label>About</label>
                                                    <textarea name="about" class="form-control" rows="4"></textarea>
                                                </div>
                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-gradient color-2 btn-pill">Add Agency</button>
                                                </div>
                                            </form>

                                        </div>
                 
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- user dashboard section end -->
    
@endsection
