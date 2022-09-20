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
                            <li class="breadcrumb-item active" aria-current="page">Update property</li>
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
                        <div class="create-tab" id="create-property">
                            <div class="property-wizard common-card">
                                <div class="common-header">
                                    <h5>Update property</h5>
                                </div>
                                <div class="create-property-form">
                                    <div class="form-inputs">
                                        <h6>Basic information</h6>

                                    </div>

                                    <form action="/dashboard/user-properties/{{ $properties->id }}" class="row gx-2 gx-sm-3" method="POST" enctype="multipart/form-data">
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
                                            <label>Initiator ID</label>
                                            <input name="user_id" type="number" class="form-control"
                                                placeholder="Inititator id" value="{{ Auth::User()->id }}"  readonly>
                                        </div>
                                        
                                        <div class="form-group col-sm-4">
                                            <label>Property Type</label>
                                            <select name="property_type" id="property_type" class="form-control">
                                                <option selected value="{{ $properties->property_type }}">Choose...</option>
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
                                                <option selected value="{{ $properties->property_status }}">Choose...</option>
                                                <option value="Rent">For Rent</option>
                                                <option value="Sale">For Sale</option>
                                                <option value="Sold">Sold (paid)</option>
                                            </select>
                                        </div>

                                        <div class="form-group col-sm-4">
                                            <label>Property Price</label>
                                            <input name="property_price" type="text" class="form-control"
                                                placeholder="$2800" value="{{ $properties->property_price }}">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Max Rooms</label>
                                            <select name="rooms" id="rooms" class="form-control">
                                                <option selected value="{{ $properties->rooms }}">Choose...</option>
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
                                                <option selected value="{{ $properties->beds }}">Choose...</option>
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
                                                <option selected value="{{ $properties->bathrooms }}">Choose...</option>
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
                                                <option selected value="{{ $properties->halls }}">Choose...</option>
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
                                                <option selected value="{{ $properties->emergency_exit }}">Choose...</option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>CCTV</label>
                                            <select name="cctv" id="cctv" class="form-control">
                                                <option selected value="{{ $properties->cctv }}">Choose...</option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Free wi-fi</label>
                                            <select name="free_wi_fi" id="free_wi_fi" class="form-control">
                                                <option selected value="{{ $properties->free_wi_fi }}">Choose...</option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>free parking In the area</label>
                                            <select name="free_parking_in_the_area" id="free_parking_in_the_area" class="form-control">
                                                <option selected value="{{ $properties->free_parking_in_the_area }}">Choose...</option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Air Conditioning</label>
                                            <select name="air_conditioning" id="air_conditioning" class="form-control">
                                                <option selected value="{{ $properties->air_conditioning }}">Choose...</option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Area</label>
                                            <input name="area" type="text" class="form-control"
                                                placeholder="85 sq ft" value="{{ $properties->area }}">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Price</label>
                                            <input name="price" type="text" class="form-control"
                                                placeholder="$3000" value="{{ $properties->price }}">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Year built</label>
                                            <input name="year_built" type="number" class="form-control"
                                                placeholder="1900" value="{{ $properties->year_built }}">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Choose your Agency</label>
                                            <select name="agency" id="agency" class="form-control">
                                                <option selected value="{{ $properties->agency }}">Choose...</option>
                                                @foreach (DB::table('agencies')->get() as $agency)
                                                <option value="Blue Sky">{{ $agency->name }}</option>
                                                @endforeach 
                                                {{-- <option value="Zephyr">Zephyr</option> --}}
                                                {{-- <option value="Premiere">Premiere</option> --}}
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label>Video (youtube link)</label>
                                            <input type="text" class="form-control" placeholder="mp4 video link" value="{{ $properties->video_link }}">
                                        </div>
                                        <div class="form-group col-sm-12">
                                            <label>Description</label>
                                            <textarea name="description" class="form-control" rows="4">{{ $properties->description }}</textarea>
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Address</label>
                                            <input name="address" type="text" class="form-control"
                                                placeholder="Address of your property" value="{{ $properties->address }}">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Zip code</label>
                                            <input name="zip_code" type="number" class="form-control"
                                                placeholder="39702" value="{{ $properties->zip_code }}">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Any Country</label>
                                            <input name="country" type="text" class="form-control"
                                                placeholder="Uruguay" value="{{ $properties->country }}">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Any City</label>
                                            <input name="city" type="text" class="form-control"
                                                placeholder="New York" value="{{ $properties->city }}">
                                        </div>
                                        <div class="form-group col-sm-4">
                                            <label>Landmark</label>
                                            <input name="landmark" type="text" class="form-control"
                                                placeholder="landmark place name" value="{{ $properties->landmark }}">
                                        </div>
                                    <h3>Agent details</h3>
                                            <div class="form-group col-4">
                                                <label>Agent Contact Email</label>
                                                <input name="contact_email" type="text" class="form-control"
                                                    placeholder="Enter Agent Email" value="{{ $properties->contact_email }}">
                                            </div>
                                            <div class="form-group col-4">
                                                <label>Agent Contact Name</label>
                                                <input name="contact_name" type="text" class="form-control"
                                                    placeholder="Enter Agent Name" value="{{ $properties->contact_name }}">
                                            </div>
                                            <div class="form-group col-4">
                                                <label>Agent Contact address</label>
                                                <input name="contact_address" type="text" class="form-control"
                                                    placeholder="Agent Address" value="{{ $properties->contact_address }}">
                                            </div>
                                            <div class="form-group col-4">
                                                <label>Contact Phone Number</label>
                                                <input name="contact_phone_number" type="text" class="form-control"
                                                    placeholder="Agent Phone Number" value="{{ $properties->contact_phone_number }}">
                                            </div>
                                            <div class="form-group col-4">
                                                <label>Agent Telegram link</label>
                                                <input name="contact_telegram_link" type="text" class="form-control"
                                                    placeholder="Agent Telegram link" value="{{ $properties->contact_telegram_link }}">
                                            </div>
                                            <div class="form-group col-4">
                                                <label>Agent Whatsapp link</label>
                                                <input name="contact_whatsapp_link" type="text" class="form-control"
                                                    placeholder="Agent whatsapp link" value="{{ $properties->contact_whatsapp_link }}">
                                            </div>
                                </div>
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
