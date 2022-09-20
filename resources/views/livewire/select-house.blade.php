<div>

        <!-- home section start -->
        <section class="home-section layout-1 layout-6">
            <div class="home-main">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <div class="container">
                                <div class="home-left">
                                    <div>
                                        <div class="home-slider-1 arrow-light slick-shadow">
                                            <div>
                                                <div class="home-content">
                                                    <div>
                                                        <img src="{{ asset('assets/img/asset-logo-side.png') }}"
                                                            class="img-fluid m-0" alt="">
                                                        <h6>Want to buy or rent Home ?</h6>
                                                        <h1>Reality Properties solve your problems</h1>
                                                        <a href="submit-property.html" class="btn btn-gradient color-6">submit
                                                            property</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="home-content">
                                                    <div>
                                                        <img src="../assets/images/signature/2.png" class="img-fluid m-0"
                                                            alt="">
                                                        <h6>Want to buy or sell Land ?</h6>
                                                        <h1>Elegant retreat in quiet Coral Gables</h1>
                                                        <a href="submit-property.html" class="btn btn-gradient color-6">submit
                                                            property</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="looking-icons">
                                            <h5>What are you looking for?</h5>
                                            <ul>
                                                <li>
                                                    <a href="{{ route('login') }}" class="looking-icon">
                                                        <svg class="property-svg">
                                                            <use xlink:href="../assets/svg/icons.svg#home-lock"></use>
                                                        </svg>
                                                        <h6>House</h6>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('login') }}" class="looking-icon">
                                                        <svg class="property-svg">
                                                            <use xlink:href="../assets/svg/icons.svg#home-heart"></use>
                                                        </svg>
                                                        <h6>Booking</h6>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{ route('login') }}" class="looking-icon">
                                                        <svg class="property-svg">
                                                            <use xlink:href="../assets/svg/icons.svg#key"></use>
                                                        </svg>
                                                        <h6>Garage</h6>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5">
                            <div class="home-search-6">
                                <div class="vertical-search">
                                    <div class="left-sidebar">
                                        <div class="row gx-3">
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Property Status</label>
                                                    <div>
                                                        <select wire:model="search_status"
                                                        class="form-control font-rubik">
                                                        <option selected value=""><span>Choose</span> <i
                                                                class="fas fa-angle-down"></i></span></option>
                                                        <option value="Rent">For Rent</option>
                                                        <option value="Sale">For Sale</option>
                                                        </select>
                                                </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label>Property Type</label>
                                                    <div>
                                                        <select wire:model="search_type"
                                                        class="form-control font-rubik">
                                                        <option selected value=""><span>Choose</span> <i
                                                                class="fas fa-angle-down"></i></span></option>
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
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Rooms</label>
                                                    <select wire:model="search_room"
                                                    class="form-control font-rubik">
                                                    <option selected value=""><span>Choose</span> <i
                                                            class="fas fa-angle-down"></i></span></option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Bed</label>
                                                    <select wire:model="search_bed"
                                                    class="form-control font-rubik">
                                                    <option selected value=""><span>Choose</span> <i
                                                            class="fas fa-angle-down"></i></span></option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label>Bath</label>
                                                    <select wire:model="search_bath"
                                                    class="form-control font-rubik">
                                                    <option selected value=""><span>Choose</span> <i
                                                            class="fas fa-angle-down"></i></option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="6">6</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="form-group">
                                                    <label>Agencies</label>
                                                    <select wire:model="search_agencies" 
                                                    class="form-control font-rubik">
                                                    <option selected value=""><span>Choose</span><i
                                                            class="fas fa-angle-down"></i></option>
                                                    @forelse (DB::table('agencies')->get() as $agency)
                                                    <option value="{{ $agency->name }}</">{{ $agency->name }}</option>
                                                    @empty
                                                    <option value="">None</option>
                                                    @endforelse
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-6">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="amount">Price : </label>
                                                        <input class="form-control" type="number"  wire:model="search_price" >
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12 col-sm-6">
                                                <div class="form-group">
                                                    <div class="form-group">
                                                        <label for="amount">Area : </label>
                                                        <input class="form-control" type="number"  wire:model="search_area" >
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- home section end -->
    
        <!-- property section start -->
        <section class="property-section slick-between slick-shadow property-color-6">
            <div class="container">
                <div class="row ratio_landscape">
                    <div class="col">
                        <div class="title-1 color-6">
                            <span class="label label-gradient color-6">Properties</span>
                            <h2>Latest</h2>
                            <hr>
                        </div>
    
    
                        <div class="listing-hover-property row">
                            {{-- @forelse (DB::table('properties')->limit(6)->orderBy('created_at','desc')->get() as $property) --}}
                            @forelse ($properties as $property)
                                <div class="col-xl-4 col-md-6 wow fadeInUp" wire:key="property-{{ $property->id }}" >
                                    <div class="property-box">
                                        <div class="property-image">
                                            @forelse (DB::table('pictures')->limit(1)->where('properties_id', $property->id)->get() as $picture)
                                                <a href="javascript:void(0)">
                                                    <img src="{{ URL::asset('images/' . $picture->image_path) }}"
                                                        class="bg-img" alt="" width="600px">
                                                    <div class="labels-left">
                                                        <span
                                                            class="label label-shadow">{{ $property->property_status }}</span>
                                                    </div>
                                                </a>
                        
                                            @empty
                                                <a href="javascript:void(0)">
                                                    <img src="../assets/images/others/1.jpg" class="bg-img" alt="" width="600px">
                                                    <div class="labels-left">
                                                        <span class="label label-shadow">{{ $property->property_status }}</span>
                                                    </div>
                                                </a>
                                            @endforelse
                                            <div class="bottom-property">
                                                <div class="d-flex">
                                                    <div>
                                                        <h5><a href="single-property-6.html">{{ $property->property_type }}</a>
                                                        </h5>
                                                        <h6>${{ $property->property_price }} <small>/ start from</small></h6>
                                                    </div>
                                                    <button type="button" class="btn btn-gradient color-6 mt-3"
                                                        onclick="document.location='{{ route('description', ['id' => $property->id]) }}'">Details</button>
                                                </div>
                                                <div class="overlay-option">
                                                    <ul>
                                                        <li>
                                                            <span>Beds</span>
                                                            <h6>{{ $property->beds }}</h6>
                                                        </li>
                                                        <li>
                                                            <span>Baths</span>
                                                            <h6>{{ $property->bathrooms }}</h6>
                                                        </li>
                                                        <li>
                                                            <span>Garage</span>
                                                            <h6>{{ $property->garage }}</h6>
                                                        </li>
                                                        <li>
                                                            <span>Area</span>
                                                            <h6>{{ $property->area }}m<sup>2</sup></h6>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <div class="col-xl-4 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                                    <div class="">
                                       
                                            <div><strong>No result for this search</strong></div>
                                    
                                    </div>
                                </div>
                               
                            @endforelse
                            {{ $properties->links() }}
                        </div>
    
                    </div>
                </div>
            </div>
        </section>
        <!-- property section end -->
</div>