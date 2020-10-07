<?php

namespace App\Http\Livewire\Entreprises;

use App\Models\Entreprise as ModelsEntreprise;
use Livewire\Component;

class Entreprise extends Component
{
    public $entreprise, $contacts, $sous_labels,
        $artists,
        $genres;

    public function mount($entreprise)
    {
        $this->entreprise = ModelsEntreprise::where('id', $entreprise)->with('contacts')->first();
        $this->contacts = $this->entreprise->contacts;
        $this->sous_labels = json_decode($this->entreprise->sous_labels);
        $this->artists = json_decode($this->entreprise->artists);
        $this->genres = json_decode($this->entreprise->genres);
    }
    public function render()
    {
        return view('livewire.entreprises.entreprise')->extends('layouts.app');
    }
}
