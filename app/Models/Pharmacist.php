<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharmacist extends Model
{
    use HasFactory;
    protected $table="pharmacists";
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function pharmacistProduct()
    {
        return $this->hasMany(PharmacistTable::class);
    }
    public function perscription()
    {
        return $this->hasMany(Perscription::class);
    }
}
