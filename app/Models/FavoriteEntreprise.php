<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FavoriteEntreprise extends Model
{
    use HasFactory;

    protected $table = "clients_favorite_entreprises";

    protected $fillable = ['client_id', 'entreprise_id'];
}
