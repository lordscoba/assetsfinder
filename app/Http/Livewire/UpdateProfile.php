<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UpdateProfile extends Component
{



    public $users,
        // $user,
        $firstname,
        $lastname,
        $gender,
        $address,
        $birthday,
        $city,
        $state,
        $agent_status,
        $agency,
        $about_agent,
        $phone_number,
        $license_year,
        $twitter_link,
        $facebook_link,
        $user_id;
    public $updateMode = true;

    public function render()
    {
        return view('livewire.update-profile', [
            'user' => User::all(),
        ]);
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields()
    {
        $this->firstname = '';
        $this->lastname = '';
        $this->gender = '';
        $this->address = '';
        $this->birthday = '';
        $this->city = '';
        $this->state = '';
        $this->agent_status = '';
        $this->agency = '';
        $this->about_agent = '';
        $this->phone_number = '';
        $this->license_year = '';
        $this->twitter_link = '';
        $this->facebook_link = '';
    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $users = User::findOrFail($id);
        $this->user_id = $id;
        $this->firstname = $users->firstname;
        $this->lastname = $users->lastname;
        $this->gender = $users->gender;
        $this->address = $users->address;
        $this->birthday = $users->birthday;
        $this->agent_status = $users->agent_status;
        $this->city = $users->city;
        $this->state = $users->state;
        $this->agency = $users->agency;
        $this->about_agent = $users->about_agent;
        $this->phone_number = $users->phone_number;
        $this->license_year = $users->license_year;
        $this->twitter_link = $users->twitter_link;
        $this->facebook_link = $users->facebook_link;

        $this->updateMode = true;
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function update()
    {
        $validatedDate = $this->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'gender' => 'required',
            'address' => 'required',
            // 'birthday' => 'required',
            'city' => 'required',
            'state' => 'required',
            'agent_status' => 'required',
            'agency' => 'required',
            'about_agent' => 'required',
            'phone_number' => 'required',
            'license_year' => 'required',
            'twitter_link' => 'required',
            'facebook_link' => 'required',
        ]);
        $id = Auth::user()->id;
        // if($this->filled('birthday')) {
        //     $birthday = $this->input('birthday');
        // }else{
        //     $birthday = DB::table('users')
        //     ->where('id',$id)
        //     ->first();
        //     $birthday = $birthday->birthday;

            
        // }
        $users = User::findOrFail($id);
        $users->update([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'address' => $this->address,
            'birthday' => $this->birthday,
            'city' => $this->city,
            'gender' => $this->gender,
            'state' => $this->state,
            'agent_status' => $this->agent_status,
            'agency' => $this->agency,
            'about_agent' => $this->about_agent,
            'phone_number' => $this->phone_number,
            'license_year' => $this->license_year,
            'twitter_link' => $this->twitter_link,
            'facebook_link' => $this->facebook_link,
        ]);

        $this->updateMode = false;

        session()->flash('message', 'Profile Updated Successfully.');
        $this->resetInputFields();
        return redirect()->back();
    }
    
}
