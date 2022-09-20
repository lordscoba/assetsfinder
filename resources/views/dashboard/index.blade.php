
@extends('layouts.app')

@section('content')
       <!-- breadcrumb start -->
       <section class="breadcrumb-section p-0">
        <img src="../assets/images/inner-background.jpg" class="bg-img img-fluid" alt="">
        <div class="container">
            <div class="breadcrumb-content">
                <div>
                    <h2>Dashboard</h2>
                    <nav aria-label="breadcrumb" class="theme-breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
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
                            <div id="dashboard">
                                <div class="user-wrapper">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="common-card">
                                                <div class="widgets">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <p>total agents</p>
                                                            <h5>{{ DB::table('users')
                                                                ->count()   }}</h5>
                                                        </div>
                                                        <div class="small-bar">
                                                            <div class="small-chart"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="common-card">
                                                <div class="widgets widget-1">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <p>total Agencies</p>
                                                            <h5>{{ DB::table('agencies')
                                                                ->count() }}</h5>
                                                        </div>
                                                        <div class="small-bar">
                                                            <div class="small-chart1"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="common-card">
                                                <div class="widgets widget-2">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <p>total properties</p>
                                                            <h5>{{ DB::table('properties')
                                                                ->count()   }}</h5>
                                                        </div>
                                                        <div class="small-bar">
                                                            <div class="small-chart2"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-7 col-md-12">
                                            <div class="common-card overview">
                                                <div class="common-header">
                                                    <h5>Sales overview</h5>
                                                </div>
                                                <ul class="overview-content">
                                                    <li>
                                                        <div class="d-flex">
                                                            <div>
                                                                <p>Total Prices</p>
                                                                <h4>${{ DB::table('properties')
                                                                    ->sum('property_price')   }}</h4>
                                                            </div>
                                                            {{-- <span><span class="label label-success">+30%</span></span> --}}
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div>
                                                                <p>Total sold</p>
                                                                <h4>${{ DB::table('properties')->where('property_status','Paid')
                                                                    ->sum('property_price')   }}</h4>
                                                            </div>
                                                            {{-- <span><span class="label label-success">+20%</span></span> --}}
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="d-flex">
                                                            <div>
                                                                <p>Max Price</p>
                                                                <h4>${{ DB::table('properties')
                                                                    ->max('property_price')   }}</h4>
                                                            </div>
                                                        </div>
                                                        
                                                    </li>
                                                </ul>
                                                <div id="overviewchart"></div>
                                            </div>
                                        </div>
                                        <div class="col-xl-5 col-md-6">
                                            <div class="common-card sales-agent">
                                                <div class="common-header">
                                                    <h5>Agents and Contacts</h5>
                                                    <br>
                                                    <br>
                                                @foreach (DB::table('users')
                                                ->where('agent_status','yes')->limit(5)->get() as $agent)
                                                <div id="agent-sales">{{ $agent->name  }}: {{ $agent->phone_number }} </div>
                                                @endforeach
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-4 xl-40 col-md-6">
                                            <div class="common-card available-property">
                                                <div class="common-header">
                                                    <h5>Available property</h5>
                                                </div>
                                                <div class="radial-property">
                                                    <div id="radial"></div>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table table-bordernone">
                                                        <thead>
                                                            <tr>
                                                                <th>Property</th>
                                                                <th>Price</th>
                                                                <th>Date</th>
                                                                <th>Status</th>
                                                                
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>

                                                                @forelse (DB::table('properties')->where('property_status','!=','Paid')->limit(3)->get()  as $properties)
                                                            <tr>
                                                            <td>
                                                                    <div class="d-flex">
                                                                        
                                                                        <h6>{{ $properties->property_type }}</h6>
                                                                    </div>
                                                                </td>
                                                                <td>${{ $properties->property_price }}</td>
                                                                <td>{{ $properties->created_at }}</td>
                                                               
                                                             <td><span class="label label-light color-3">{{ $properties->property_status }}</span></td> 
                                                            </tr>
                                                             @empty
                                                                    <p>NO properties</p>
                                                                @endforelse
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-8 xl-60 col-md-12">
                                            <div class="common-card property-overview">
                                                <div class="common-header">
                                                    <h5>Property overview</h5>
                                                </div>
                                                <div class="table-responsive">
                                                    <table class="table table-bordernone">
                                                        <thead>
                                                            <tr>
                                                                <th>Property</th>
                                                                <th>Price</th>
                                                                <th>Date</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @forelse (DB::table('properties')->where('property_status','!=','Paid')->limit(5)->get()  as $properties)
                                                            <tr>
                                                            <td>
                                                                    <div class="d-flex">
                                                                        <h6>${{ $properties->property_price }}</h6>
                                                                    </div>
                                                                </td>
                                                                <td>{{ $properties->property_status }}</td>
                                                                <td>{{ $properties->created_at }}</td>
                                                               
                                                             <td><span class="label label-light color-3">{{ $properties->property_status }}</span></td> 
                                                            </tr>
                                                             @empty
                                                                    <p>NO properties</p>
                                                                @endforelse
                                                            
                                                            
                                                        </tbody>
                                                    </table>
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
    <!-- user dashboard section end -->

@endsection
 