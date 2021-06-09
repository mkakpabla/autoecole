<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Temoignage;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function __invoke()
    {
        $packages = Package::take(3)->get();
        $temoignages = Temoignage::all();
        return view("pages.home", compact("packages", "temoignages"));
    }
}
