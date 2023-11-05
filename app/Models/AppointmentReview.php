<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentReview extends Model
{
    use HasFactory;
    protected $table='appointment_reviews';
    public function onlinemeeting()
    {
     return $this->belongsTo(Onlinemeeting::class);
    }
}
