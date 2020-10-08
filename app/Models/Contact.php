<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Config;

class Contact extends Model
{
    use HasFactory;

    protected $appends = ['Picture'];


    public function getPictureAttribute()
    {
        $env = Config::get('app')['env'];
        $pic = '';
        switch ($env) {
            case 'local':
                $pic =  "http://127.0.0.1:8001/images/contacts/" . $this->attributes['picture'];
                break;

            case 'production':
                $pic =  "https://dashboard.contactmajor.com/images/contacts/" . $this->attributes['picture'];
                break;
        }

        return $pic;
    }


    public function social()
    {
        return $this->hasOne(ContactSocialLinks::class);
    }

    public function type()
    {
        return $this->belongsTo(ContactType::class, 'type_id', 'id');
    }

    public function entreprises()
    {
        return $this->belongsToMany(Entreprise::class, 'entreprise_contacts', 'contact_id', 'entreprise_id');
    }


    public function favorites()
    {
        return $this->hasMany(FavoriteContact::class, 'contact_id', 'id');
    }
}
