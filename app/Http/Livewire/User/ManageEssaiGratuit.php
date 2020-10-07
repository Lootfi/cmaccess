<?php

namespace App\Http\Livewire\User;

use App\Models\User;
use Carbon\Carbon;
use Carbon\CarbonInterface;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use PayPal\Api\Authorization;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Rest\ApiContext;

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
        $paypal_conf = config('paypal');
        $_api_context = new ApiContext(new OAuthTokenCredential(
            $paypal_conf['client_id'],
            $paypal_conf['secret']
        ));
        $_api_context->setConfig($paypal_conf['settings']);

        try {
            $authorization = Authorization::get($this->user->payment_auth->auth_id, $_api_context);
            $voided = $authorization->void($_api_context);
            Auth::logout();
            $this->user->payment_auth->delete();
            $this->user->delete();
            $this->emit('paymentCanceled');
        } catch (\Exception $ex) {
            dd($ex);
        }
    }

    public function render()
    {
        return view('livewire.user.manage-essai-gratuit')->extends('layouts.app');
    }
}
