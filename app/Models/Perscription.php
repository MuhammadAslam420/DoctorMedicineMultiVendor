<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perscription extends Model
{
    use HasFactory;
    protected $table='perscriptions';

    public function user()
    {
        return $this->hasOne(User::class,'user_id');

    }
    public function pharmacist()
    {
        return $this->belongsTo(Pharmacist::class);

    }
}
