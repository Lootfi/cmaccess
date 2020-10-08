<?php

namespace App\Http\Livewire\User;

use App\Models\FavoriteContact;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MyFavoriteContacts extends Component
{

    public $user, $favorite_contacts;

    public function removeFromFavorites($contact_id)
    {
        FavoriteContact::where('contact_id', $contact_id)->first()->delete();
        $this->favorite_contacts = Auth::user()->favorited_contacts;
    }

    public function mount()
    {
        $this->user = Auth::user();
        $this->favorite_contacts = $this->user->favorited_contacts;
    }

    public function render()
    {
        return view('livewire.user.my-favorite-contacts')->extends('layouts.app');
    }
}
