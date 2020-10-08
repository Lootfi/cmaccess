<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavoriteContact extends Model
{
    use HasFactory;

    protected $table = "clients_favorite_contacts";

    protected $fillable = ['client_id', 'contact_id'];
}
