<div>
    {{-- Stop trying to control. --}}
    <div class="property-grid-2 ratio_63">
        <div class="filter-panel">
            <div class="top-panel">
                <div>
                    <h2>My Listing</h2>
                    <a class="btn btn-primary btn-lg" href="{{ route('properties.create') }}"> Create Properties</a>
                    &nbsp;
                </div>
                <ul class="grid-list-filter">
                    <li>
                        <div class="filter-bottom-title">
                            <h6 class="mb-0 font-roboto">Advance search <i data-feather="align-center"
                                    class="float-end ms-2"></i></h6>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
        <div class="left-sidebar filter-bottom-content">
            <h6 class="d-lg-none d-block text-end">
                <a href="javascript:void(0)" class="close-filter-bottom">Close filter</a>
            </h6>
            <div class="row">
                <div class="col-lg-4">
                    <label>Status</label>
                    <select wire:model="search_status" class="form-control font-rubik">
                        <option selected value=""><span>Choose</span> <i class="fas fa-angle-down"></i></span>
                        </option>
                        <option value="Rent">For Rent</option>
                        <option value="Sale">For Sale</option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <label>Property Type</label>
                    <select wire:model.="search_type" class="form-control font-rubik">
                        <option selected value=""><span>Choose</span> <i class="fas fa-angle-down"></i></span>
                        </option>
                        <option value="Apartment">Apartment</option>
                        <option value="Family House">Family House</option>
                        <option value="Cottage">Cottage</option>
                        <option value="Duplex">Duplex</option>
                        <option value="Bungalow">Bungalow</option>
                        <option value="Block of Flats">Block of Flats</option>
                        <option value="Shops">Shops</option>
                        <option value="Mall">Mall</option>
                    </select>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <div class="form-group">
                            <label for="amount">Country</label>
                            <input class="form-control" type="text" wire:model="search_country">
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Rooms</label>
                        <select wire:model="search_room" class="form-control font-rubik">
                            <option selected value=""><span>Choose</span> <i class="fas fa-angle-down"></i></span>
                            </option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Bed</label>
                        <select wire:model="search_bed" class="form-control font-rubik">
                            <option selected value=""><span>Choose</span> <i class="fas fa-angle-down"></i></span>
                            </option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="form-group">
                        <label>Bath</label>
                        <select wire:model="search_bath" class="form-control font-rubik">
                            <option selected value=""><span>Choose</span> <i class="fas fa-angle-down"></i>
                            </option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                        </select>
                    </div>
                </div>

            </div>
        </div>
        <div class="property-2 row column-sm zoom-gallery property-label property-grid list-view" wire:ignore.self>
            @foreach ($properties as $property)
                <div class="col-md-12" wire:key="property-{{ $property->id }}">
                    <div class="property-box">
                        <div class="property-image">
                            <div class="property-slider">
                                @forelse (DB::table('pictures')->where('properties_id', $property->id)->get() as $picture)
                                    <a href="javascript:void(0)">
                                        <img style="width:400px" src="{{ URL::asset('images/' . $picture->image_path) }}"
                                            class="bg-img" alt="">

                                    </a>
                                @empty
                                    <a href="javascript:void(0)">
                                        <img style="width:400px" src="../assets/images/property/4.jpg" class="bg-img"
                                            alt="">

                                    </a>
                                @endforelse
                            </div>
                            <div class="labels-left">
                                <div>
                                    <span class="label label-shadow">{{ $property->property_status }}</span>
                                </div>
                            </div>

                        </div>

                        <div class="property-details">
                            <span class="font-roboto">{{ $property->country }}</span>
                            <div class="my-listing font-roboto">{{ $property->created_at }}</div>
                            <a href="single-property-8.html">
                                <h3>{{ $property->property_type }}</h3>
                            </a>
                            <h6>${{ $property->property_price }}.00*</h6>
                            <p class="font-roboto">Elegant retreat in a quiet Coral Gables setting. This home provides
                                wonderful entertaining spaces with a chef
                                kitchen opening…</p>
                            <ul>
                                <li><img src="../assets/images/svg/icon/double-bed.svg" class="img-fluid"
                                        alt="">Bed : {{ $property->beds }}</li>
                                <li><img src="../assets/images/svg/icon/bathroom.svg" class="img-fluid"
                                        alt="">Baths : {{ $property->bathrooms }}</li>
                                <li><img src="../assets/images/svg/icon/square-ruler-tool.svg"
                                        class="img-fluid ruler-tool" alt="">Sq Ft : {{ $property->area }}
                                </li>
                            </ul>
                            <div class="property-btn d-flex">
                                {{-- <span>{{ $property->created_at }}</span> --}}
                                <a href="properties/{{ $property->id }}/edit"
                                    class="btn btn-dashed btn-pill color-2 float-left">Edit</a>
                                <form action="/admin/properties/{{ $property->id }}" class="pt-0" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button type="submit"
                                        class="btn btn-dashed btn-pill color-2 float-right">Delete</button>
                                </form>
                                <a href="/admin/properties/{{ $property->id }}"
                                    class="btn btn-dashed btn-pill color-2 float-right">Details</a>
                                {{-- <button type="button"  onclick="document.location='single-property-8.html'" class="btn btn-dashed btn-pill color-2">Details</button> --}}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <nav class="theme-pagination">
            <div class="float-end d-flex">{{ $properties->links() }}</div>
        </nav>
    </div>
</div>
