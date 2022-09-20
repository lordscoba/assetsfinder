<?php

namespace App\Http\Controllers\Admin\Properties;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Properties;
use App\Models\Pictures;
use App\Models\Reviews;
use Illuminate\Pagination\Paginator;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        //

        // $properties = Properties::all();
        $properties = Properties::paginate(5);
        $pictures = Pictures::all();

        return view('admin.properties.index', [
            'properties' => $properties,
            'pictures' => $pictures
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
        return view('admin.properties.create');
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
            'user_id' => 'required',
            'property_type' => 'required',
            'property_status' => 'required',
            'property_price' => 'required',
            'rooms' => 'required',
            'beds' => 'required',
            'bathrooms' => 'required',
            'price' => 'required',
            'agency' => 'required',
            'area' => 'required',
            // 'description' => 'required',
            // 'address' => 'required',
            // 'zip_code' => 'required',
            // 'country' => 'required',
            // 'city' => 'required',
            // 'year_built' => 'required',
            // 'contact_email' => 'required',
            // 'contact_name' => 'required',
            // 'contact_address' => 'required',
            // 'contact_phone_number' => 'required',
            // 'contact_whatsapp_link' => 'required',

        ]);


        $properties = Properties::create([
            'user_id' => $request->input('user_id'),
            'property_type' => $request->input('property_type'),
            'property_status' => $request->input('property_status'),
            'property_price' => $request->input('property_price'),
            'rooms' => $request->input('rooms'),
            'beds' => $request->input('beds'),
            'halls' => $request->input('halls'),
            'bathrooms' => $request->input('bathrooms'),
            'garage' => $request->input('garage'),
            'area' => $request->input('area'),
            'emergency_exit' => $request->input('emergency_exit'),
            'cctv' => $cctv = $request->input('cctv'),
            'free_wi_fi' => $request->input('free_wi_fi'),
            'free_parking_in_the_area' => $request->input('free_parking_in_the_area'),
            'air_conditioning' => $request->input('air_conditioning'),
            // 'balcony' => $request->input('balcony'),
            'price' => $request->input('price'),
            'agency' => $request->input('agency'),
            'description' => $request->input('description'),
            'address' => $request->input('address'),
            'zip_code' => $request->input('zip_code'),
            'country' => $request->input('country'),
            'city' => $request->input('city'),
            'landmark' => $request->input('landmark'),
            'zip_code' => $request->input('zip_code'),
            'video_link' => $request->input('video_link'),
            'year_built' => $request->input('year_built'),
            'contact_email' => $request->input('contact_email'),
            'contact_name' => $request->input('contact_name'),
            'contact_address' => $request->input('contact_address'),
            'contact_phone_number' => $request->input('contact_phone_number'),
            'contact_telegram_link' => $request->input('contact_telegram_link'),
            'contact_whatsapp_link' => $request->input('contact_whatsapp_link'),
        ]);

        // return view('admin.properties.store');
        return redirect('/admin/properties');
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
        $properties = Properties::findOrFail($id);

        return view('admin.properties.show')->with('properties', $properties);
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
        $properties = Properties::findOrFail($id);

        return view('admin.properties.edit')->with('properties', $properties);
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
        $request->validate([
            'user_id' => 'required',
            'property_type' => 'required',
            'property_status' => 'required',
            'property_price' => 'required',
            'rooms' => 'required',
            'beds' => 'required',
            'bathrooms' => 'required',
            'price' => 'required',
            'agency' => 'required',
            'area' => 'required',
            // 'rooms' => 'required',
            // 'beds' => 'required',
            // 'halls' => 'required',
            // 'bathrooms' => 'required',
            // 'price' => 'required',
            // 'agency' => 'required',
            // 'description' => 'required',
            // 'address' => 'required',
            // 'zip_code' => 'required',
            // 'country' => 'required',
            // 'city' => 'required',
            // 'year_built' => 'required',
            // 'contact_email' => 'required',
            // 'contact_name' => 'required',
            // 'contact_address' => 'required',
            // 'contact_phone_number' => 'required',
            // 'contact_whatsapp_link' => 'required',
        ]);


        $properties = Properties::where('id', $id)
            ->update([
                'user_id' => $request->input('user_id'),
                'property_type' => $request->input('property_type'),
                'property_status' => $request->input('property_status'),
                'property_price' => $request->input('property_price'),
                'rooms' => $request->input('rooms'),
                'beds' => $request->input('beds'),
                'halls' => $request->input('halls'),
                'bathrooms' => $request->input('bathrooms'),
                'garage' => $request->input('garage'),
                'area' => $request->input('area'),
                // 'balcony' => $request->input('balcony'),
                'price' => $request->input('price'),
                'agency' => $request->input('agency'),
                'description' => $request->input('description'),
                'address' => $request->input('address'),
                'zip_code' => $request->input('zip_code'),
                'country' => $request->input('country'),
                'city' => $request->input('city'),
                'landmark' => $request->input('landmark'),
                'zip_code' => $request->input('zip_code'),
                'year_built' => $request->input('year_built'),
                'video_link' => $request->input('video_link'),
                'contact_email' => $request->input('contact_email'),
                'contact_name' => $request->input('contact_name'),
                'contact_address' => $request->input('contact_address'),
                'contact_phone_number' => $request->input('contact_phone_number'),
                'contact_telegram_link' => $request->input('contact_telegram_link'),
                'contact_whatsapp_link' => $request->input('contact_whatsapp_link'),
            ]);
        // return view('admin.properties.store');
        return redirect('/admin/properties');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Properties $property)
    {
        //
        // return view('admin.properties.destroy');

        $property->delete();
        // return view('properties.index');
        return redirect()->route('properties.index')
            ->withSuccess(__('property delete successfully.'));
    }
}
