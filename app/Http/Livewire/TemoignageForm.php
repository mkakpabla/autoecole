<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Temoignage;

class TemoignageForm extends Component
{



    public $id_tge = null;
    public $nom_tge;
    public $contenu_tge;

    public function mount(Temoignage $temoignage)
    {
        $this->id_tge = $temoignage->id_tge;
        $this->nom_tge = $temoignage->nom_tge;
        $this->contenu_tge = $temoignage->contenu_tge;

    }


    public function storeTge()
    {
        $this->validateData();
        Temoignage::create([
            "nom_tge" => $this->nom_tge,
            "contenu_tge" => $this->contenu_tge,
            "date_tge" => "2021-05-20"
        ]);
        session()->flash("success", "Le témoignage a été ajouté avec sucsess");
        return redirect()->route("admin.temoignages");
    }

    public function updateTge()
    {
        $this->validateData();
        Temoignage::find($this->id_tge)->update([
            "nom_tge" => $this->nom_tge,
            "contenu_tge" => $this->contenu_tge,
        ]);
        session()->flash("success", "Le témoignage a été mis à jour.");
        return redirect()->route("admin.temoignages");
    }


    private function validateData()
    {
        $this->validate([
            "nom_tge" => "required",
            "contenu_tge" => "required|max:200"
        ]);
    }


    public function render()
    {
        return view('livewire.temoignage-form');
    }
}
