<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Notifications\PasswordResetNotification;

class UtilisateursController extends Controller
{


    public function index()
    {
        $users = User::all();
        return view("admin.utilisateurs.index", compact("users"));
    }


    public function create()
    {
        return view("admin.utilisateurs.create");
    }

    public function edit(User $user)
    {
        return view("admin.utilisateurs.edit", compact("user"));
    }

    public function delete(User $user)
    {
        $user->delete();
        if(request()->ajax()) return response()->json([], 200);
        return redirect()->back();
    }

    public function resetPassword(User $user)
    {

        $password = Str::random(8);
        $user->update([
            "password" => Hash::make($password)
        ]);
        $user->notify(new PasswordResetNotification($password));
        session()->flash('success', "Le mot de passe a été rénitialiser");
        return redirect()->route('admin.users.index');
    }
}
