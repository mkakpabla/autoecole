<?php

namespace App\Http\Livewire;

use App\Models\Package;
use Livewire\Component;

class PackageForm extends Component
{

    public $id_pack;
    public $lib_pack;
    public $prix_pack;
    public $duree_pack;
    public $desc_pack;




    public function mount(Package $package = null)
    {
        if (!is_null($package)) {
            $this->id_pack = $package->id_pack;
            $this->lib_pack = $package->lib_pack;
            $this->prix_pack = $package->prix_pack;
            $this->duree_pack = $package->duree_pack;
            $this->desc_pack = $package->desc_pack;
        } else {
            $this->id_pack = 0;
        }
    }

    public function updatePackage()
    {
        $this->validateData();
        $package = Package::find($this->id_pack);
        $package->update([
            "lib_pack" => $this->lib_pack,
            "prix_pack" => $this->prix_pack,
            "duree_pack" => $this->duree_pack,
            "desc_pack" => $this->desc_pack
        ]);
        session()->flash("success", "Les informations du package ont été mis à jour");
        return redirect()->route("admin.packages");
    }


    private function validateData()
    {
        $this->validate([
            "lib_pack" => "required",
            "prix_pack" => "required|numeric",
            "duree_pack" => "required|numeric",
            "desc_pack" => "required|max:200",
        ], [
            "lib_pack.required" => "le libellé est requis",
            "prix_pack.required" => "Le prix est requis",
            "prix_pack.numeric" => "Le prix n'est pas valide(Ex: 30000)",
            "duree_pack.required" => "La durée est requis",
            "duree_pack.numeric" => "La durée n'est pas valide(Ex: 30)",
            "desc_pack.required" => "La description est requis",
            "desc_pack.max" => "La description ne peut dépassé 200 caractères"
        ]);
    }


    public function store()
    {
        $this->validateData();

        Package::create([
            "lib_pack" => $this->lib_pack,
            "prix_pack" => $this->prix_pack,
            "duree_pack" => $this->duree_pack,
            "desc_pack" => $this->desc_pack
        ]);
        session()->flash("success", "Le package a été ajouté avec success");
        return redirect()->route("admin.packages");
    }

    public function render()
    {
        return view('livewire.package-form');
    }
}
