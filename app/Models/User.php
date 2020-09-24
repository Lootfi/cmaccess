<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\UploadedFile;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url', 'Avatar', 'PaymentMethodName'
    ];

    public function getPaymentMethodNameAttribute()
    {
        if ($this->payment_confirmed == 0) return 'Pas encore';
        else if (preg_match('/.*(stripe).*/', $this->payment_method)) return 'Stripe';
        else return 'PayPal';
    }


    public function getAvatarAttribute()
    {
        $env = Config::get('app')['env'];
        $pic = '';
        switch ($env) {
            case 'local':
                $pic =  "http://127.0.0.1:8001/images/artists/" . $this->attributes['avatar'];
                break;

            case 'production':
                $pic =  "https://dashboard.contactmajor.com/images/artists/" . $this->attributes['avatar'];
                break;
        }

        return $pic;
    }
}
