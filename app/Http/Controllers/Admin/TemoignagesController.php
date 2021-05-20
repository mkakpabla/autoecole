<?php

namespace App\Http\Controllers\Admin;

use App\Models\Temoignage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TemoignagesController extends Controller
{


    public function index()
    {
        $temoignages = Temoignage::all();
        return view("admin.temoignages.index", compact("temoignages"));
    }

    public function create()
    {
        return view("admin.temoignages.create");
    }

    public function edit(Temoignage $temoignage)
    {
        return view("admin.temoignages.edit", compact("temoignage"));
    }

    public function delete(Temoignage $temoignage)
    {
        $temoignage->delete();
        if(request()->ajax()) {
            return response()->json([], 200);
        }
        return redirect()->back();
    }
}
