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
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Create User</li>
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
                                        <h5>Create User</h5>
                                    </div>
                                    <div class="create-property-form">
                                        <div class="form-inputs">
                                            <h6>All profile details</h6>
                                            <form action="/admin/users" class="row gx-2 gx-sm-3" method="POST" enctype="multipart/form-data">
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
                                                    <label> User</label>
                                                    <input name="name" type="text" class="form-control" placeholder="Enter your Full Name">
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label>Email</label>
                                                    <input name="email" type="text" class="form-control" placeholder="Enter your Email">
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label>Password</label>
                                                    <input name="password" type="text" class="form-control" placeholder="Enter your password">
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label>Phone Number</label>
                                                    <input name="phone_number" type="text" class="form-control" placeholder="Enter Phone Number">
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label>Gender</label>
                                                    <select name="gender" id="gender" class="form-control">
                                                        <option selected value="">Choose...</option>
                                                        <option value="male">male</option>
                                                        <option value="female">female</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label>Address</label>
                                                    <input name="address" type="text" class="form-control" placeholder="Enter Address">
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label>City</label>
                                                    <input name="city" type="text" class="form-control" placeholder="Enter City">
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label>Firstname</label>
                                                    <input name="firstname" type="text" class="form-control" placeholder="Enter Firstname">
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label>lastname</label>
                                                    <input name="lastname" type="text" class="form-control" placeholder="Enter Lastname">
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label>Twitter Link</label>
                                                    <input name="twitter_link" type="text" class="form-control" placeholder="Enter Twitter Link">
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label>Facebook Link</label>
                                                    <input name="facebook_link" type="text" class="form-control" placeholder="Enter Facebook Link">
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label>Rating</label>
                                                    <select name="rating" id="rating" class="form-control">
                                                        <option selected value="">Choose...</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label>License Year</label>
                                                    <input name="license_year" type="number" class="form-control" placeholder="Enter Year">
                                                </div>

                                                <div class="form-group col-sm-4">
                                                    <label>Agent Status</label>
                                                    <select name="agent_status" id="rating" class="form-control">
                                                        <option selected value="">Choose...</option>
                                                        <option value="yes">Yes</option>
                                                        <option value="no">No</option>
                                                    </select>
                                                </div>
                                                <div class="form-group col-sm-4">
                                                    <label>Agencies</label>
                                                    <select name="agency" id="agency" class="form-control">
                                                        <option selected value="">Choose...</option>
                                                        @foreach (DB::table('agencies')->get() as $agency)
                                                        <option value="{{ $agency->name }}">{{ $agency->name }}</option>
                                                        @endforeach 
                                                        {{-- <option value="Zephyr">Zephyr</option> --}}
                                                        {{-- <option value="Premiere">Premiere</option> --}}
                                                    </select>
                                                </div>
                                               
                                                <div class="form-group col-sm-4">
                                                    <label>User profile pics</label>
                                                    <input name="image" type="file" class="form-control" placeholder="Enter your link">
                                                </div>

                                                <div class="form-group col-sm-12">
                                                    <label>About</label>
                                                    <textarea name="about_agent" class="form-control" rows="4"></textarea>
                                                </div>
                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-gradient color-2 btn-pill">Add User</button>
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
