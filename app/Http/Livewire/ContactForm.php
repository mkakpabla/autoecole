<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class ContactForm extends Component
{

    public $name;
    public $phone;
    public $message;

    public function store()
    {
        $this->validate([
            "name" => "required",
            "phone" => "required|numeric",
            "message" => "required",
        ]);
        Message::create([
            "sender_phone" => $this->phone,
            "sender_nom" => $this->name,
            "contenu_msg" => $this->message,
        ]);
        session()->flash("message_send", "Votre message a été envoyé avec success");
        $this->name = $this->phone = $this->message = null;
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
