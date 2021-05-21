<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class MessageTable extends Component
{
    public function render()
    {
        return view('livewire.message-table', [
            "messages" => Message::all()
        ]);
    }
}
