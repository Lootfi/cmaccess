<?php

namespace App\Http\Livewire\Contacts;

use App\Models\Contact as ModelsContact;
use Livewire\Component;

class Contact extends Component
{
    public $contact, $social, $similar, $entreprises;

    public function mount($contact)
    {
        $this->contact = ModelsContact::where('id', $this->contact)->first();
        $this->entreprises = $this->contact->entreprises;
        $this->social = $this->contact->social;
        $this->similar = ModelsContact::where('title', $this->contact->title)->where('id', '!=', $this->contact->id)->get()->take(3);
    }
    public function render()
    {
        return view('livewire.contacts.contact');
    }
}
