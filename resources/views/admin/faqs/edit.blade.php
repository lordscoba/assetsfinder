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
                            <li class="breadcrumb-item active" aria-current="page">Update Faq</li>
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
                                    <h5>Update Faq</h5>
                                </div>
                                <div class="create-property-form">
                                    <div class="form-inputs">
                                        <h6>All Faq details</h6>
                                        <form action="/admin/faqs/{{ $faqs->id }}" class="row gx-2 gx-sm-3" method="POST"
                                            enctype="multipart/form-data">
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
                                            <div class="form-group col-sm-12">
                                                <label>Title</label>
                                                <textarea name="title" class="form-control" rows="2">{{ $faqs->title }}</textarea>
                                            </div>
                                            <div class="form-group col-sm-12">
                                                <label>Body</label>
                                                <textarea name="body" class="form-control" rows="4">{{ $faqs->body }}</textarea>
                                            </div>
                                            <div class="text-end">
                                                <button type="submit" class="btn btn-gradient color-2 btn-pill">Update Faq</button>
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
