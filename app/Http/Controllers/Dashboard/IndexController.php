<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
Use Auth;

class IndexController extends Controller
{
    //
       /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(){

        $userID = Auth::user()->id;
        $user = User::findOrFail($userID);

        $name = DB::table('users')
        ->where('id', 2)
        // ->select('image_path')
        ->first();

        $sum = DB::table('users')
        ->count();

        return view('dashboard.index', [
            'user' => $user,
            'name' => $name,
            'sum' => $sum,
        ]);

        // return view('dashboard.index')->with('user', $user);
    }

}
