<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ChangePassword extends Component
{
    public $users,
        // $user,
        $old_password,
        $new_password,
        $confirm_password,
        $user_id;

    public function render()
    {
        // $user = User::all();
        // return view('livewire.change-password')->with('user', $user);
        // $this->user = User::all();
        return view('livewire.change-password', [
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
        $this->old_password = '';
        $this->new_password = '';
        $this->confirm_password = '';
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
        $this->password = $users->password;
        // $this->new_password = $users->new_password;
        // $this->confirm_password = $users->confirm_password;

    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function cancel()
    {
        // $this->updateMode = false;
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
            'old_password' => ['required', new MatchOldPassword],
            'new_password' => ['required'],
            'confirm_password' => ['required','same:new_password'],
        ]);

        $id = Auth::user()->id;
        $users = User::findOrFail($id);
        $users->update([
            'password' =>Hash::make($this->new_password),
        ]);

        // $this->updateMode = false;

        session()->flash('message', 'password Updated Successfully.');
        $this->resetInputFields();
        return redirect()->back();
    }

}
