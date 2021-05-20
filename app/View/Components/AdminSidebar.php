<?php

namespace App\View\Components;

use App\Models\Message;
use Illuminate\View\Component;

class AdminSidebar extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        $msgCount = Message::count();
        return view('components.admin-sidebar', compact("msgCount"));
    }
}
