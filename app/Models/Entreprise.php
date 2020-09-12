<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    use HasFactory;

    public function contacts()
    {
        return $this->belongsToMany(Contact::class, 'entreprise_contacts', 'entreprise_id', 'contact_id');
    }
}
