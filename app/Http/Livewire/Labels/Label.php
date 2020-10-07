<?php

namespace App\Http\Livewire\Labels;

use App\Models\Entreprise;
use Livewire\Component;

class Label extends Component
{
    public $entreprise, $contacts;

    public function mount($label)
    {
        $this->entreprise = Entreprise::where('id', $label)->with('contacts')->first();
        $this->contacts = $this->entreprise->contacts;
    }
    public function render()
    {
        return view('livewire.labels.label')->extends('layouts.app');
    }
}
