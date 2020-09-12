<?php

namespace App\Http\Livewire\Contacts;

use Livewire\Component;

class Card extends Component
{
    public $contact;

    public function render()
    {
        return view('livewire.contacts.card');
    }
}
