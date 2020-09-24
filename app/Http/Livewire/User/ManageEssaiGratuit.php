<?php

namespace App\Http\Livewire\User;

use Carbon\Carbon;
use Carbon\CarbonInterface;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ManageEssaiGratuit extends Component
{

    public $name, $email, $user, $slug;
    public $timeLeft;


    public function mount()
    {
        $this->user = Auth::user();
        $this->name = $this->user->name;
        $this->email = $this->user->email;
        $this->slug = $this->user->slug;
        $time = Carbon::parse($this->user->updated_at)->addDay()->diffForHumans(Carbon::now(), null, false, 3);
        if (preg_match('/.*(après).*/', $time))
            $this->timeLeft = explode('après', $time)[0];
    }

    public function cancelPayment()
    {
        $this->timeLeft = "nooo";
        Auth::logout();

        return redirect()->to('login');
    }

    public function render()
    {
        return view('livewire.user.manage-essai-gratuit')->extends('layouts.app');
    }
}
