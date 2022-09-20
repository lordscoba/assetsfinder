<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Properties;
use App\Models\User;
use App\Models\Agency;
use App\Models\Pictures;
use App\Models\Reviews;

class LandingPagesController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function about_us()
    {
        return view('about-us');
    }

    public function contact()
    {
        return view('contact');
    }

    public function faq()
    {
        return view('faq');
    }

    public function services()
    {
        return view('services');
    }

    public function terms_conditions()
    {
        return view('terms-conditions');
    }

    public function privacy_policy()
    {
        return view('privacy-policy');
    }

    public function error()
    {
        return view('404');
    }

   

    public function agency_list()
    {
        return view('agents.agency-list');
    }
    
    public function agent_list()
    {
        return view('agents.agent-list');
    }

    public function description($id)
    {
        // $properties = Properties::findOrFail($id)->first();
        // return view('description')->with('properties', $properties);

        return view('description', [
            'properties' => Properties::findOrFail($id)
        ]);
    }
    public function agency_profile($id)
    {
        // $agencies = Agency::findOrFail($id)->first();
        // return view('agents.agency-profile')->with('agencies', $agencies);
        return view('agents.agency-profile', [
            'agencies' => Agency::findOrFail($id)
        ]);
    }

    public function agent_profile($id)
    {
        // $agents = User::findOrFail($id)->first();
        // return view('agents.agent-profile')->with('agents', $agents);
        return view('agents.agent-profile', [
            'agents' => User::findOrFail($id)
        ]);
    }
    
}
