<?php

namespace App\Http\Livewire\User;

use App\Models\FavoriteEntreprise;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class MyFavoriteEntreprises extends Component
{
    public $user, $favorite_entreprises;

    public function removeFromFavorites($entreprise_id)
    {
        FavoriteEntreprise::where('entreprise_id', $entreprise_id)->first()->delete();
        $this->favorite_entreprises = Auth::user()->favorited_entreprises;
    }

    public function mount()
    {
        $this->user = Auth::user();
        $this->favorite_entreprises = $this->user->favorited_entreprises;
    }

    public function render()
    {
        return view('livewire.user.my-favorite-entreprises')->extends('layouts.app');
    }
}
