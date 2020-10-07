<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientPaymentAuthorization extends Model
{
    use HasFactory;

    protected $fillable = ['client_id', 'order_id', 'auth_id', 'stripe_customer_id', 'capture_id'];

    protected $attributes = [
        "order_id" => '',
        "auth_id" => '',
        "capture_id" => '',
        'stripe_customer_id' => ''
    ];
    public function client()
    {
        return $this->belongsTo(User::class, 'client_id', 'id');
    }
}
