<?php

namespace App\Http\Livewire\Labels;

use App\Models\Entreprise;
use Livewire\Component;
use Livewire\WithPagination;

class Labels extends Component
{
    use WithPagination;

    public $search, $sorting;

    public $queryString = ["search" => ['except' => ''], 'sorting'];

    public function searchEntreprises()
    {
        $this->resetPage();
    }

    public function render()
    {

        $orderBy = "latest";

        switch ($this->sorting) {
            case 'recent':
                $orderBy = "latest";
                break;

            case 'old':
                $orderBy = "oldest";
                break;
        }

        $entreprises = Entreprise::where([
            ['name', 'like', '%' . $this->search . '%']
        ])
            ->withCount('contacts')
            ->$orderBy()
            ->paginate(2);

        return view('livewire.labels', ['entreprises' => $entreprises])->extends('layouts.app');
    }
}
