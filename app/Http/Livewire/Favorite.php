<?php

namespace App\Http\Livewire;

use App\Models\FavoriteContact;
use App\Models\FavoriteEntreprise;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Favorite extends Component
{
    public $fav_id, $fav_type, $layout;

    public function favoritise()
    {
        switch ($this->fav_type) {
            case 'entreprise':
                FavoriteEntreprise::firstOrCreate(['entreprise_id' => $this->fav_id, 'client_id' => Auth::user()->id]);
                break;

            case 'contact':
                FavoriteContact::firstOrCreate(['contact_id' => $this->fav_id, 'client_id' => Auth::user()->id]);
                $this->emitTo('contacts.contact', 'favorited');
                break;
        }
    }
    public function render()
    {
        return view('livewire.favorite');
    }
}
