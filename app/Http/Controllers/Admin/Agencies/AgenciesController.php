<?php

namespace App\Http\Controllers\Admin\Agencies;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agency;
use Illuminate\Support\Facades\DB;
// use PhpParser\Node\Stmt\Global_;

class AgenciesController extends Controller
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
        $agencies = Agency::all();

        return view('admin.agencies.index', [
            'agencies' => $agencies
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
        return view('admin.agencies.create');
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
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'website' => 'required',
            'about' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048',
        ]);

       $newImageName = time().'-'.$request->name . '.'.$request->image->extension();
        // $newImageName = time().'-'.$request->name . '.'.$request->image->extesion();

        $request->image->move(public_path('images'),$newImageName);

        $agencies = Agency::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'address' => $request->input('address'),
            'website' => $request->input('website'),
            'about' => $request->input('about'),
            'facebook_link' => $request->input('facebook_link'),
            'twitter_link' => $request->input('twitter_link'),
            'image_path' => $newImageName,
        ]);
        // return view('admin.properties.store');
        return redirect('/admin/agencies');
        // return back()
        //     ->with('success','You have successfully upload image.')
        //     ->with('image',$newImageName); 
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

        // $agencies = Agency::findOrFail($id);
        // return view('admin.agencies.show')->with('agencies', $agencies);

        return view('admin.agencies.show', [
            'agencies' => Agency::findOrFail($id),
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
        //
        $agencies = Agency::findOrFail($id);
    
        return view('admin.agencies.edit')->with('agencies', $agencies);
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


        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'website' => 'required',
            'about' => 'required',
            'image' => 'mimes:jpg,png,jpeg|max:5048',
            // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if($request->hasFile('image')) {
            $newImageName = time().'-'.$request->name . '.'.$request->image->extension();
            $request->image->move(public_path('images/'),$newImageName);  

        } else {
            $newImageNames = DB::table('agencies')
            ->where('id', $id)
            ->first();
            $newImageName = $newImageNames->image_path;

        }

        $agencies = Agency::where('id', $id)
        ->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phone_number'),
            'address' => $request->input('address'),
            'website' => $request->input('website'),
            'about' => $request->input('about'),
            'facebook_link' => $request->input('facebook_link'),
            'twitter_link' => $request->input('twitter_link'),
            'image_path' => $newImageName,
        ]);
        // return view('admin.properties.store');
        return redirect('/admin/agencies');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agency $agency)
    {
        //
        $agency->delete();
        return view('admin.agencies.destroy');
    }
}
