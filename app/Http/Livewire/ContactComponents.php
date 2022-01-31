<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactComponents extends Component
{
    public function render()
    {
        return view('livewire.contact-components')->layout("layouts.base");
    }
}
