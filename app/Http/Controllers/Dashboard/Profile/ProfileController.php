<?php

namespace App\Http\Controllers\Dashboard\Profile;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{


     /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    //
        /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
 
        $userID = Auth::user()->id;
        $user = User::findOrFail($userID);
        return view('dashboard.user-profile')->with('user', $user);
    }

    public function edit($id)
    {
  
        return view('dashboard.user-profile', [
            'user' => User::findOrFail($id)
        ]);
    }




    public function update(Request $request, $id){

            $request->validate([
                'firstname' => ['required'],
                'lastname' => ['required'],
                'gender' => ['required'],
                'address' => ['required'],
                'city' => ['required'],
                'state' => ['required'],
            ]);

            $id = User::findOrFail(Auth::user()->id);
            $users = User::where('id', $id)
        ->update([
            'firstname' => $request->input('firstname'),
            'lastname' => $request->input('lastname'),
            'gender' => $request->input('gender'),
            'birthday' => $request->input('birthday'),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'state' => $request->input('state'),
            'name' => $request->input('name'),
           
        ]);

            return redirect()->back();
        
    }

    public function changeEmail(Request $request, $id){


            $user = User::findOrFail($request->id);
            $request->validate([
                'oldEmail' => ['required','same:auth()->user()->email'],
                'newEmail' => ['required'],
                'confirmEmail' => ['required','same:newEmail'],
            ]);

            $users = User::where('id', $id)
        ->update([
            'email' => $request->input('email'),
           
        ]);

        return redirect()->back();    

    }


    public function changePassword(Request $request, $id){
         
            // $user = User::findOrFail($request->id);

            $request->validate([
                'oldPassword' => ['required', new MatchOldPassword],
                'newPassword' => ['required'],
                'confirmPassword' => ['required','same:newPassword'],
            ]);
            // User::findOrFail(auth()->user()->id)->update(['password'=> Hash::make($request->new_password)]);
            $users = User::where('id', $id)
        ->update([
            'password' => Hash::make($request->new_password),
           
        ]);
          
    }


    public function changePicture(Request $request, $id){
        
            $user = User::findOrFail($request->id);

            $request->validate([
                'image'=>'required|mimes:jpg,png,jpeg|max:5048'
            ]);

            $newImageName = time().'-'.$request->name.'.'.$request->image->extension();
            //create a new image folder in public folder

            $request->image->move(public_path('images'),$newImageName);

            $users = User::where('id', $id)
        ->update([
            'image_path' => $newImageName,
           
        ]);
        return redirect()->back();   

    }
    
}
