<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Suscribers;


class SuscribersFeedController extends Controller
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
            'email' => 'required|unique:suscribers|email',
            // 'email' => 'required|exists:suscribers,email',
            
        ]);

        $suscribers = Suscribers::create([
            'email' => $request->input('email'),
        ]);
        return redirect()->back();
    }
}
