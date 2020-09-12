<?php

namespace App\Http\Livewire;

use App\Models\Contact;
use App\Models\ContactType;
use Livewire\Component;

class Contacts extends Component
{
    public $contacts, $contact_types, $search = '';

    protected $listeners = ['searchChange' => 'updateSearch'];

    public function mount()
    {
        // $this->contacts = Contact::all();
        $this->contact_types = ContactType::all();
    }

    public function updateSearch($value)
    {
        $this->search = $value;
    }

    public function updated($label, $value)
    {
        $this->$label = $value;
    }


    public function render()
    {
        return view('livewire.contacts');
    }
}
