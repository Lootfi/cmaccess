<?php

namespace App\Http\Livewire\Contacts;

use Livewire\Component;

class Search extends Component
{
    public $contact_types, $search, $type;

    public function updated($label, $value)
    {
        $this->$label = ucfirst($value);
        if ($label == "search") {
            $this->emitUp('searchChange', "dang");
        }
    }

    public function render()
    {
        return view('livewire.contacts.search');
    }
}
