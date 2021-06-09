<?php

namespace App\Http\Livewire;

use App\Models\Message;
use Livewire\Component;

class MessageTable extends Component
{

    public $status = "unread";



    public function read(Message $message)
    {

        $message->update([
            "status" => "read",
        ]);
        session()->flash("success", "Message marqué comme lu");

    }

    public function render()
    {
        return view('livewire.message-table', [
            "messages" => Message::whereStatus($this->status)->get(),
        ]);
    }
}
