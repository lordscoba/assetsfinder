<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ChangeEmail extends Component
{
    public $users,
        $old_email,
        $new_email,
        $confirm_email,
        $user_id;
     public $updateMode = true;

    public function render()
    {
 
        return view('livewire.change-email', [
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
        $this->old_email = '';
        $this->new_email = '';
        $this->confirm_email = '';
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
        $this->email = $users->email;
        // $this->new_email = $users->new_email;
        // $this->confirm_email = $users->confirm_email;
        
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
            'old_email' => ['required','exists:users,email'],
            'new_email' =>  ['required'],
            'confirm_email' => ['required','same:new_email'],
        ]);
        $id = Auth::user()->id;
        // $users = User::findOrFail($this->user_id);
        $users = User::findOrFail($id);
        $users->update([
            'email' => $this->new_email,
        ]);

        $this->updateMode = false;

        session()->flash('message', 'Email Updated Successfully.');
        $this->resetInputFields();
        return redirect()->back();
    }


}
