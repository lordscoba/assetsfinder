<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
    @foreach (DB::table('users')->where('id', Auth::user()->id)->get() as $user)
        <!-- edit profile modal start -->
        <div class="modal fade edit-profile-modal" id="edit-profile" wire:ignore.self>
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit Profile</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <input type="hidden" wire:model="user_id">
                            <div class="row gx-3">
                                <div class="form-group col-md-6">
                                    <label for="firstname">first name</label>
                                    <input type="text" wire:model.defer="firstname" class="form-control"
                                        id="firstname" placeholder="first name" value="{{ $user->firstname }}">
                                    @error('firstname')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="lastname">last name</label>
                                    <input type="text" wire:model.defer="lastname" class="form-control"
                                        id="lastname" placeholder="last name" value="{{ $user->lastname }}">
                                    @error('lastname')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="agent_status">Agent Status = {{ $user->agent_status }}</label>
                                    <select wire:model.defer="agent_status" id="agent_status" class="form-control">
                                        <option selected value="{{ $user->agent_status }}">Choose...</option>
                                        <option value="yes">yes</option>
                                        <option value="no">no</option>
                                    </select>
                                    @error('agent_status')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="agency">Agency = {{ $user->agency }}</label>
                                    <select wire:model.defer="agency" id="agency" class="form-control">
                                        <option selected value="{{ $user->agency }}">Choose...</option>
                                        @foreach (DB::table('agencies')->get() as $agency)
                                            <option value="{{ $agency->name }}">{{ $agency->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('agency')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="gender">gender = {{ $user->gender }}</label>
                                    <select wire:model.defer="gender" id="gender" class="form-control">
                                        <option selected value="{{ $user->gender }}">Choose...</option>
                                        <option value="female">female</option>
                                        <option value="male">male</option>
                                    </select>
                                    @error('gender')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label>Birthday = {{ $user->birthday }}</label>
                                    <input type="date" wire:model.defer="birthday" class="form-control"
                                        placeholder="18 april" id="datepicker" value="{{ $user->birthday }}" />
                                    @error('birthday')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-12">
                                    <label for="address">Address</label>
                                    <input wire:model.defer="address" type="text" class="form-control" id="address"
                                        placeholder="1234 Main St" value="{{ $user->address }}">
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-12">
                                    <label for="twitter_link">Twitter Link</label>
                                    <input wire:model.defer="twitter_link" type="text" class="form-control"
                                        id="twitter_link" value="{{ $user->twitter_link }}">
                                    @error('twitter_link')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-12">
                                    <label for="facebook_link">Facebook Link</label>
                                    <input wire:model.defer="facebook_link" type="text" class="form-control"
                                        id="facebook_link" value="{{ $user->facebook_link }}">
                                    @error('facebook_link')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="city">City</label>
                                    <input wire:model.defer="city" type="text" class="form-control" id="city"
                                        value="{{ $user->city }}">
                                    @error('city')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="state">State</label>
                                    <input wire:model.defer="state" type="text" class="form-control"
                                        id="state" value="{{ $user->state }}">
                                    @error('state')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone_number">Phone Number</label>
                                    <input wire:model.defer="phone_number" type="text" class="form-control"
                                        id="phone_number" value="{{ $user->phone_number }}">
                                    @error('phone_number')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="license_year">License Year</label>
                                    <input wire:model.defer="license_year" type="number" class="form-control"
                                        id="license_year" min="1900" max="2030"
                                        value="{{ $user->license_year }}">
                                    @error('license_year')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group col-12">
                                    <label for="about_agent">About Agent</label>
                                    <textarea class="form-control" id="about_agent" wire:model.defer="about_agent" placeholder="Enter "></textarea>
                                    @error('about_agent')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                    </div>
                    <div class="modal-footer">

                        <button type="button" wire:click.prevent.defer="cancel()"
                            class="btn btn-dashed color-2 btn-pill" data-bs-dismiss="modal">Cancel</button>
                        <button wire:click.prevent="update()" class="btn btn-gradient color-2 btn-pill"
                            data-bs-dismiss="modal">Save
                            changes</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- edit profile modal start -->


        <div class="common-card">
            <div class="user-name media">
                <div class="media-body">
                    <h5>{{ $user->lastname." ".$user->firstname }} <span class="label label-success">Real estate agent</span></h5>
                    
                    <div class="rating">
                        @php
                        $ratings = DB::table('users')
                            ->where('id', $user->id)
                            ->value('rating');
                        $ratings_count = DB::table('users')
                            ->where('id', $user->id)
                            ->count();
                        // echo $ratings_count;
                        $rating = intval($ratings);
                        // echo $rating;
                        $rating_end = 5 - $rating;
                    @endphp
                    @if ($ratings == 0)
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                        <strong>No Ratings</strong>
                    @else
                        @for ($i = 1; $i <= $rating; $i++)
                            <i class="fas fa-star"></i>
                        @endfor
                        @for ($i = 1; $i <= $rating_end; $i++)
                            <i class="far fa-star"></i>
                        @endfor
                    @endif
                    </div>
                </div>
                <span data-bs-toggle="modal" wire:click="edit({{ $user->id }})" data-bs-target="#edit-profile"
                    class="label label-light label-flat color-4 edit">Edit</span>
            </div>
            <ul class="user-detail">
                <li>
                    <i data-feather="map-pin"></i>
                    <span>{{ $user->address }}</span>
                </li>
                <li>
                    <i data-feather="mail"></i>
                    <span>{{ $user->email }}</span>
                </li>
                <li>
                    <i data-feather="check-square"></i>
                    <span>Licensed since {{ $user->license_year }}</span>
                </li>
            </ul>
            <p class="font-roboto">{{ $user->about_agent }}</p>
        </div>

        <div class="common-card">
            <div class="row">
                <div class="col-xxl-6 col-xl-7">
                    <div class="information-detail">
                        <div class="common-header">
                            <h5>About</h5>
                        </div>
                        <div class="information">
                            <ul>
                                <li>
                                    <span>Gender :</span>
                                    <p>{{ $user->gender }}</p>
                                </li>
                                <li>
                                    <span>Birthday :</span>
                                    <p>{{ $user->birthday }}</p>
                                </li>
                                <li>
                                    <span>Phone number :</span>
                                    <a href="javascript:void(0)">
                                        {{ $user->phone_number }}
                                    </a>
                                </li>
                                <li>
                                    <span>Address :</span>
                                    <p>{{ $user->address }}</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="information-detail">
                        <div class="common-header">
                            <h5>Login Details</h5>
                        </div>
                        <div class="information">
                            <ul>
                                <li>
                                    <span>Email :</span>
                                    <a href="javascript:void(0)">{{ $user->email }}</a>
                                    <span data-bs-toggle="modal" wire:click="edit({{ $user->id }})"
                                        data-bs-target="#edit-address"
                                        class="editEmail label label-light label-flat color-4">Edit</span>
                                </li>
                                <li>
                                    <span>Password :</span>
                                    <a href="javascript:void(0)">&#9679;&#9679;&#9679;&#9679;&#9679;&#9679;</a>
                                    <span data-bs-toggle="modal" wire:click="edit({{ $user->id }})"
                                        data-bs-target="#edit-password"
                                        class="editPassword label label-light label-flat color-4">Edit</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5 offset-xxl-1 col-xl-5 offset-xl-0">
                    <div class="about-img d-xl-block d-none">
                        <img src="../assets/images/inner-pages/2.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    @endforeach


</div>
