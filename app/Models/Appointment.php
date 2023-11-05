<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $table="appointments";
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function onlinemeeting()
    {
        return $this->hasOne(Onlinemeeting::class);
    }
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
    
    public function transaction1()
    {
        return $this->hasOne(Transaction1::class);
    }
}
