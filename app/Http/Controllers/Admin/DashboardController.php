<?php

namespace App\Http\Controllers\Admin;

use App\Models\Message;
use App\Models\Package;
use App\Models\Temoignage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{


    public function index()
    {
        return view("admin.dashboard", [
            "messages" => Message::all(),
            "packCount" => Package::count(),
            "tgeCount" => Temoignage::count()
        ]);
    }
}
