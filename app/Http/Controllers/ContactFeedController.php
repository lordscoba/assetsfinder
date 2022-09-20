<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Contact_us;

class ContactFeedController extends Controller
{
    //
        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('contact');
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
        $request->validate([
            'contact_name' => 'required',
            'phone_number' => 'required',
            'email' => 'required',
            'body' => 'required|unique:contact_us',
        ]);


        $contact_us = Contact_us::create([
            'contact_name' => $request->input('contact_name'),
            'phone_number' => $request->input('phone_number'),
            'email' => $request->input('email'),
            'body' => $request->input('body'),
            
        ]);
        return redirect('contact');
    }
}
