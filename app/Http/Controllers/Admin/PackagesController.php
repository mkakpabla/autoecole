<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Package;
use Illuminate\Http\Request;

class PackagesController extends Controller
{


    public function index()
    {
        $packages = Package::all();
        return view("admin.packages.index", compact("packages"));
    }

    public function create()
    {
        return view("admin.packages.create");
    }

    public function edit(Package $package)
    {
        return view("admin.packages.edit", compact("package"));
    }

    public function delete(Package $package)
    {
        $package->delete();
        if(request()->ajax()) {
            return response()->json([], 200);
        } else return redirect()->back();

    }
}
