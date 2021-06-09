<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;

class PackagesController extends Controller
{


    public function __invoke()
    {
        $packages = Package::all();
        return view("pages.packages", compact("packages"));
    }
}
