<?php

namespace App\Http\Livewire\User;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class PasswordUpdate extends Component
{
    public $name, $email, $user, $slug;

    public function mount()
    {
        $this->user = Auth::user();
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->slug = $this->user->slug;
    }

    public function render()
    {
        return view('livewire.user.password-update')->extends('layouts.app');
    }
}
