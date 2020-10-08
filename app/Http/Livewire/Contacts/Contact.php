<?php

namespace App\Http\Livewire\Contacts;

use App\Models\Contact as ModelsContact;
use App\Models\FavoriteContact;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Contact extends Component
{
    public $contact, $social, $similar, $entreprises, $is_favorited;

    protected $listeners = ['favorited' => 'addToFav'];

    public function mount($contact)
    {
        $this->contact = ModelsContact::where('id', $this->contact)->first();
        $this->is_favorited = $this->contact->favorites->contains('client_id', Auth::user()->id);
        $this->entreprises = $this->contact->entreprises;
        $this->social = $this->contact->social;
        $this->similar = ModelsContact::where('title', $this->contact->title)->where('id', '!=', $this->contact->id)->get()->take(3);
    }

    public function addToFav()
    {
        $this->is_favorited = $this->contact->favorites->contains('client_id', Auth::user()->id);
    }

    public function render()
    {
        return view('livewire.contacts.contact');
    }
}
