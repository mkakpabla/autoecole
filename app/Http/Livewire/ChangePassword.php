<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Rules\VerifyPassword;
use Illuminate\Support\Facades\Hash;

class ChangePassword extends Component
{
    public $new_password;
    public $new_password_confirmation;
    public $old_password;


    public function update()
    {
        $this->validate([
            'new_password' => 'required|confirmed',
            'old_password' => ['required', new VerifyPassword],
        ], [
            "new_password.required" => "Veillez entrer le nouveau mot de passe",
            "new_password.confirmed" => "Les deux mots de passe ne sont pas identiques",
            "old_password.required" => "Veillez entrer votre ancien mot de passe",
        ]);

        auth()->user()->update([
            'password' => Hash::make($this->new_password),
        ]);
        session()->flash("success", "Votre mot de passe a été changé");

    }

    public function render()
    {
        return view('livewire.change-password');
    }
}
