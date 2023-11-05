<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
       // 'profile_photo_path',
        'phone',
        'utype',
        'social_id',
        'social_type'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    protected $dates=[
        'last_login_at','current_login_at'
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];
    public function doctor(){
        return $this->hasOne(Doctor::class,'user_id');
    }
    public function profile(){
        return $this->hasOne(Profile::class,'user_id');
    }
    public function supplier(){
        return $this->hasOne(Supplier::class,'user_id');
    }
    public function pharmacist(){
        return $this->hasOne(Pharmacist::class,'user_id');
    }
    public function manager(){
        return $this->hasOne(Manager::class,'user_id');
    }
    public function deliveryboy(){
        return $this->hasOne(DeliveryBoy::class,'user_id');
    }
    public function prescription(){
        return $this->hasOne(Perscription::class,'user_id');
    }
    public function blog(){
        return $this->hasOne(Blog::class,'user_id');
    }
}


