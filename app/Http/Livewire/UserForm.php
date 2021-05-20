<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\Notifications\UserCreateNotification;

class UserForm extends Component
{


    public $state = [];


    public function storeUser()
    {
        $this->validateState();
        $password = Str::random(8);
        $this->state["password"] = Hash::make($password);
        $user = User::create($this->state);
        $user->notify(new UserCreateNotification($password));
        session()->flash('success', "L'utilisateur a été ajouté");
        return redirect()->route('admin.users.index');
    }

    public function render()
    {
        return view('livewire.user-form');
    }


    private function validateState()
    {
        \Validator::make($this->state,
        [
           "name" => "required",
           "email" => "required|email:rfc|unique:users"
        ],
        [
            "name.required" => "le nom complet est requis",
            "email.required" => "L'email est requis",
            "email.email" => "L'email doit être un email valide"
        ])->validate();
    }
}
