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
                            <li class="breadcrumb-item active" aria-current="page">Update Review</li>
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
                                    <h5>Update reviews</h5>
                                </div>
                                <div class="create-property-form">
                                    <div class="form-inputs">
                                        <h6>All reviews details</h6>
                                        <form action="/admin/reviews/{{ $reviews->id }}" class="row gx-2 gx-sm-3" method="POST">
                                            @csrf
                                            @method('PUT')
                                            @if ($errors->any())
                                                <div class="alert alert-danger">
                                                    <ul>
                                                        @foreach ($errors->all() as $error)
                                                            <li>{{ $error }}</li><br>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            @endif
                                            <div class="form-group col-sm-4 d-none">
                                                <label> Review ID</label>
                                                <input name="review_id" type="number" class="form-control"
                                                    placeholder="Enter your ID" value="{{ $reviews->id }}" readonly>
                                            </div>
                                            <div class="form-group col-sm-4 d-none">
                                                <label>Properties ID</label>
                                                <input name="properties_id" type="number" class="form-control"
                                                    placeholder="Enter your ID" value="{{ $reviews->properties_id }}" readonly>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Reviewer Name</label>
                                                <input name="review_name" type="text" class="form-control"
                                                    placeholder="Enter review name" value="{{ $reviews->review_name }}">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Properties rating</label>
                                                <input name="rating" type="number" class="form-control"
                                                    placeholder="Enter Ratings" value="{{ $reviews->rating }}" max="5" >
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <label>Review</label>
                                                <textarea name="review" class="form-control" rows="4">{{ $reviews->review }}</textarea>
                                            </div>
                                            <div class="text-end">
                                                <button type="submit" class="btn btn-gradient color-2 btn-pill">Update
                                                    Review</button>
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
