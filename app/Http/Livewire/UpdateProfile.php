<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Rules\VerifyPassword;
use Illuminate\Validation\Rule;

class UpdateProfile extends Component
{


    public $email;
    public $name;
    public $password;



    public function mount()
    {
        $this->email = auth()->user()->email;
        $this->name = auth()->user()->name;
    }


    public function updateUser()
    {
        $user = auth()->user();
        $this->validate([
            "email" => ['required', 'email', Rule::unique('users')
                ->ignore($user->email, 'email')],
            "name" => "required",
            "password" => ["required", new VerifyPassword]
        ]);

        $user->update([
            "email" => $this->email,
            "name" => $this->name,
        ]);
        $this->password = "";
        session()->flash("success", "Les informations ont été mis à jour");
    }


    public function render()
    {
        return view('livewire.update-profile');
    }
}
