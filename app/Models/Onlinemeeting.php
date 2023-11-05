<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Onlinemeeting extends Model
{
    use HasFactory;
    protected $table="onlinemeetings";
    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }
    public function review()
    {
        return $this->hasOne(AppointmentReview::class);
    }
}
