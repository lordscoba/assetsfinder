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
                            <li class="breadcrumb-item"><a
                                    href="">Home</a></li>
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
                                    <h5>Create property</h5>
                                </div>
                                <div class="create-property-form">
                                    <div class="form-inputs">
                                        <h6>Basic information</h6>
                                        <form action="/admin/properties" class="row gx-2 gx-sm-3" method="POST" enctype="multipart/form-data">
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
                                            <div class="form-group col-sm-4 d-none">
                                                <label>Initiator ID</label>
                                                <input name="user_id" type="number" class="form-control"
                                                    placeholder="Inititator id" value="{{ Auth::User()->id }}"  readonly>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Property Type</label>
                                                <select name="property_type" id="property_type" class="form-control">
                                                    <option selected value="">Choose...</option>
                                                    <option value="Apartment">Apartment</option>
                                                    <option value="Family House">Family House</option>
                                                    <option value="Villa">Villa</option>
                                                    <option value="Company">Company</option>
                                                    <option value="Cottage">Cottage</option>
                                                    <option value="Duplex">Duplex</option>
                                                    <option value="Bungalow">Bungalow</option>
                                                    <option value="Block of Flats">Block of Flats</option>
                                                    <option value="Shops">Shops</option>
                                                    <option value="Mall">Mall</option>
                                                </select>
                                            </div>
                                            
                                            <div class="form-group col-sm-4">
                                                <label>Property Status</label>
                                                <select name="property_status" id="property_status" class="form-control">
                                                    <option selected value="">Choose...</option>
                                                    <option value="Rent">For Rent</option>
                                                    <option value="Sale">For Sale</option>
                                                </select>
                                            </div>

                                            <div class="form-group col-sm-4">
                                                <label>Property Price</label>
                                                <input name="property_price" type="text" class="form-control"
                                                    placeholder="$2800">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Max Rooms</label>
                                                <select name="rooms" id="rooms" class="form-control">
                                                    <option selected value="">Choose...</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Beds</label>
                                                <select name="beds" id="beds" class="form-control">
                                                    <option selected value="">Choose...</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Baths</label>
                                                <select name="bathrooms" id="baths" class="form-control">
                                                    <option selected value="">Choose...</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Halls</label>
                                                <select name="halls" id="halls" class="form-control">
                                                    <option selected value="">Choose...</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Emergency Exit</label>
                                                <select name="emergency_exit" id="emergency_exit" class="form-control">
                                                    <option selected value="">Choose...</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>CCTV</label>
                                                <select name="cctv" id="cctv" class="form-control">
                                                    <option selected value="">Choose...</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Free wi-fi</label>
                                                <select name="free_wi_fi" id="free_wi_fi" class="form-control">
                                                    <option selected value="">Choose...</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>free parking In the area</label>
                                                <select name="free_parking_in_the_area" id="free_parking_in_the_area" class="form-control">
                                                    <option selected value="">Choose...</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Air Conditioning</label>
                                                <select name="air_conditioning" id="air_conditioning" class="form-control">
                                                    <option selected value="">Choose...</option>
                                                    <option value="yes">Yes</option>
                                                    <option value="no">No</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Area</label>
                                                <input name="area" type="text" class="form-control"
                                                    placeholder="85 sq ft">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Price</label>
                                                <input name="price" type="text" class="form-control"
                                                    placeholder="$3000">
                                            </div>


                                            <div class="form-group col-sm-4">
                                                <label>Year built</label>
                                                <input name="year_built" type="number" class="form-control"
                                                    placeholder="1900">
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
                                            <div class="form-group col-sm-12">
                                                <label>Description</label>
                                                <textarea name="description" class="form-control" rows="4"></textarea>
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Address</label>
                                                <input name="address" type="text" class="form-control"
                                                    placeholder="Address of your property">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Zip code</label>
                                                <input name="zip_code" type="number" class="form-control"
                                                    placeholder="39702">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Any Country</label>
                                                <input name="country" type="text" class="form-control"
                                                    placeholder="Uruguay">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Any City</label>
                                                <input name="city" type="text" class="form-control"
                                                    placeholder="New York">
                                            </div>
                                            <div class="form-group col-sm-4">
                                                <label>Landmark</label>
                                                <input name="landmark" type="text" class="form-control"
                                                    placeholder="landmark place name">
                                            </div>

                                            <h3>Agent details</h3>
                                            <div class="form-group col-4">
                                                <label>Agent Contact Email</label>
                                                <input name="contact_email" type="text" class="form-control"
                                                    placeholder="Enter Agent Email">
                                            </div>
                                            <div class="form-group col-4">
                                                <label>Agent Contact Name</label>
                                                <input name="contact_name" type="text" class="form-control"
                                                    placeholder="Enter Agent Name">
                                            </div>
                                            <div class="form-group col-4">
                                                <label>Agent Contact address</label>
                                                <input name="contact_address" type="text" class="form-control"
                                                    placeholder="Agent Address">
                                            </div>
                                            <div class="form-group col-4">
                                                <label>Contact Phone Number</label>
                                                <input name="contact_phone_number" type="text" class="form-control"
                                                    placeholder="Agent Phone Number">
                                            </div>
                                            <div class="form-group col-4">
                                                <label>Agent Telegram link</label>
                                                <input name="contact_telegram_link" type="text" class="form-control"
                                                    placeholder="Agent Telegram link">
                                            </div>
                                            <div class="form-group col-4">
                                                <label>Agent Whatsapp link</label>
                                                <input name="contact_whatsapp_link" type="text" class="form-control"
                                                    placeholder="Agent whatsapp link">
                                            </div>
                                    </div>

                                    <div class="form-group col-sm-12">
                                        <label>Video (Youtube link)</label>
                                        <input name="video_link" type="text" class="form-control" placeholder="mp4 video link">
                                    </div>
                                {{-- <div class="form-inputs">
                                        <h6>Gallery</h6>
                                        <div class="input-group mb-3">
                                            <input name="image_one" type="file" class="form-control" id="inputGroupFile02">
                                            <label class="input-group-text" for="inputGroupFile02">file 1</label>
                                          </div>
                                          <div class="input-group mb-3">
                                            <input name="image_two" type="file" class="form-control" id="inputGroupFile02">
                                            <label class="input-group-text" for="inputGroupFile02">file 2</label>
                                          </div>
                                          <div class="input-group mb-3">
                                            <input  name="image_three" type="file" class="form-control" id="inputGroupFile02">
                                            <label class="input-group-text" for="inputGroupFile02">file 3</label>
                                          </div>
                                          <div class="input-group mb-3">
                                            <input  name="image_four" type="file" class="form-control" id="inputGroupFile02">
                                            <label class="input-group-text" for="inputGroupFile02">File 4</label>
                                          </div>
                                </div> --}}
                                    <div class="text-end">
                                        <button type="submit" class="btn btn-gradient color-2 btn-pill">Submit</button>
                                    </div>
                                    </form>
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
