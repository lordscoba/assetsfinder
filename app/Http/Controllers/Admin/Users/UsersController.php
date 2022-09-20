<?php

namespace App\Http\Controllers\Admin\Users;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
// Use Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\Paginator;

class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        //

        // $users = User::all();
        $users = User::paginate(5);

        return view('admin.users.index', [
            'users' => $users
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
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $request->validate([
            'name' => 'required|unique:users',
            'email' => 'required|unique:users',
            'password' => 'required',
            'phone_number' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'city' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'rating' => 'required',
            'about_agent' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048',
        ]);

        $newImageName = time().'-'.$request->name . '.'.$request->image->extension();
        $request->image->move(public_path('images'),$newImageName);

        $users = User::create([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'phone_number' => $request->input('phone_number'),
            'gender' => $request->input('gender'),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'twitter_link' => $request->input('twitter_link'),
            'facebook_link' => $request->input('facebook_link'),
            'rating' => $request->input('rating'),
            'license_year' => $request->input('license_year'),
            'agent_status' => $request->input('agent_status'),
            'agency' => $request->input('agency'),
            'about_agent' => $request->input('about_agent'),
            'image_path' => $newImageName,
        ]);
        return redirect('/admin/users');
        //
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
        $users = User::findOrFail($id);
    
        return view('admin.users.show')->with('users', $users);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
  

       
    // dd($users);
        // return view('admin.users.edit')->with('usersedit', $usersedit);

        return view('admin.users.edit', [
            'user' => User::findOrFail($id)
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

        $request->validate([
        
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'gender' => 'required',
            'address' => 'required',
            'city' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'rating' => 'required',
            'about_agent' => 'required',
            'image' => 'required|mimes:jpg,png,jpeg|max:5048',
            
        ]);

        if($request->filled('password')) {
            $editpassword = Hash::make($request->input('password'));
        }else{
            $editpasswords = DB::table('users')
            ->where('id',$id)
            ->first();
            $editpassword = $editpasswords->password;

            
        }

        if($request->hasFile('image')) {

        $newImageName = time().'-'.$request->name . '.'.$request->image->extension();
        $request->image->move(public_path('images'),$newImageName); 

        } else {
        
            $newImageNames = DB::table('users')
            ->where('id', $id)
            ->first();
            $newImageName = $newImageNames->image_path;

        }


        $users = User::where('id', $id)
        ->update([
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => $editpassword,
            'phone_number' => $request->input('phone_number'),
            'gender' => $request->input('gender'),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'twitter_link' => $request->input('twitter_link'),
            'facebook_link' => $request->input('facebook_link'),
            'rating' => $request->input('rating'),
            'license_year' => $request->input('license_year'),
            'agent_status' => $request->input('agent_status'),
            'agency' => $request->input('agency'),
            'about_agent' => $request->input('about_agent'),
            'image_path' => $newImageName,
        ]);
        return redirect('/admin/users');
        // return redirect('admin.users.show')->with('users', $users);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
        $user->delete();
        return redirect()->route('users.index')
        ->withSuccess(__('User delete successfully.'));
    }
}
