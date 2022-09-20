<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Reviews;

class ReviewFeedController extends Controller
{
    //
//
        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return url()->current();
        // return view('layouts.footer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        //
        $request->validate([
            'properties_id' => 'integer',
            'review_name' => 'required',
            'rating' => 'required|integer',
            'review' => 'unique:reviews,review',
            // 'email' => 'required|exists:suscribers,email',
            
        ]);

        $suscribers = Reviews::create([
            'properties_id' => $request->input('properties_id'),
            'review_name' => $request->input('review_name'),
            'rating' => $request->input('rating'),
            'review' => $request->input('review'),
        ]);
        return redirect()->back();
    }




}
