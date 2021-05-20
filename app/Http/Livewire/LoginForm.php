<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class LoginForm extends Component
{


    public $credentials = [];



    public function loginUser()
    {
        \Validator::make($this->credentials, [
            "email" => ["required", "email"],
            "password" => ["required"],
        ])->validate();
        if(Auth::attempt($this->credentials)) {
            return redirect()->route("admin.index");
        } else session()->flash("error", "Informations de connection incorrecte");
    }



    public function render()
    {
        return view('livewire.login-form');
    }
}
