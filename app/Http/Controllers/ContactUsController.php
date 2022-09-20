<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\Contact_us;
use App\Exceptions\InvalidOrderException;
// use Illuminate\Pagination\Paginator;


class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $contact_us = Contact_us::paginate(5);
        $contact_us = Contact_us::all();

        return view('admin.contact-us.index', [
            'contact_us' => $contact_us
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('');
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
            'contact_name' => 'required|',
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
        return redirect('/contact-us');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact_us $contact_u)
    {
        //
        // $contact_uss->delete();
        // return redirect()->route('contact_us.index')
        // ->withSuccess(__('delete successful.'));

        $contact_u->delete();
        
        return redirect()->route('contact_us.index')
        ->withSuccess(__('message deleted successfully.'));
    }
}
