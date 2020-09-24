<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class Entreprise extends Model
{
    use HasFactory;

    protected $appends = ['Logo'];


    public function getLogoAttribute()
    {
        $env = Config::get('app')['env'];
        $pic = '';
        switch ($env) {
            case 'local':
                $pic =  "http://127.0.0.1:8001/images/labels/" . $this->attributes['logo'];
                break;

            case 'production':
                $pic =  "https://dashboard.contactmajor.com/images/labels/" . $this->attributes['logo'];
                break;
        }

        return $pic;
    }

    public function contacts()
    {
        return $this->belongsToMany(Contact::class, 'entreprise_contacts', 'entreprise_id', 'contact_id');
    }
}
