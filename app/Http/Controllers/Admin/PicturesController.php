<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Pictures;
use App\Models\Properties;
use Illuminate\Http\RedirectResponse;

class PicturesController extends Controller
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
        $properties = Properties::all();
        // $properties = Properties::latest()->paginate(5);

        return view('admin.pictures.index', [
            'properties' => $properties
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
        // $property_type = DB::table('properties')->where('id', $id)->first();
        return view('admin.pictures.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//         //
        $request->validate([
            'properties_id' => 'required',
            'picture_name' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048',


        ]);

        $newImageName = time().'-'.$request->picture_name . '.'.$request->image->extension();
        $request->image->move(public_path('images'),$newImageName); 

        $pictures = Pictures::create([
            'properties_id' => $request->input('properties_id'),
            'picture_name' => $request->input('picture_name'),
            'image_path' => $newImageName,
        ]);
$properties_id = $request->input('properties_id');
        // return view('admin.properties.store');
        // return redirect('/admin/pictures/show');
        // For a route with the following URI: /profile/{id}
 
// echo "<script>
//   function myFunction() {
//   window.location = '/admin/pictures/".$properties_id."';
//   }
//   setTimeout(myFunction, 1000);
//   </script>";
   
//   return redirect()->back();

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
        $pictures = Pictures::find($id);
        $property = DB::table('properties')->where('id', $id)->first();

        return view('admin.pictures.show', [
                'property' => $property,
    
    ]);
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        return view('admin.pictures.edit', [
            'properties' => Properties::findOrFail($id)
        ]);
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
            'properties_id' => 'required',
            'picture_name' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048',


        ]);

        $newImageName = time().'-'.$request->Picture_name . '.'.$request->image->extension();
        $request->image->move(public_path('images'),$newImageName); 

        $pictures = Pictures::create([
            'properties_id' => $request->input('properties_id'),
            'picture_name' => $request->input('picture_name'),
            'image_path' => $newImageName,
        ]);
$properties_id = $request->input('properties_id');
        // return view('admin.properties.store');
        // return redirect('/admin/pictures/show');
        // For a route with the following URI: /profile/{id}
        // $pictures = Pictures::findOrFail($id);
        // $property = DB::table('properties')->where('id', $id)->first();

        // return redirect(/admin/pictures/$property->id);
        // return redirect('admin/pictures/$property->properties_id');
 
 return redirect()->back();

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pictures $picture)
    {
                //
                $picture->delete();
                return redirect()->back();
                
    }
}
