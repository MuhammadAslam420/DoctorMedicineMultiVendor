<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $table="doctors";
    public function user()
    {
        return $this->belongsTo(User::class,'user_id');
    }
    public function onlinemeeting()
 {
      return $this->hasMany(Onlinemeeting::class,'doctor_id');
 }
 public function hospital()
 {
     return $this->belongsTo(Hospital::class,'hospital_id');
 }
 public function appointment()
 {
     return $this->belongsTo(Appointment::class,'doctor_id');
 }
 public function special()
 {
     return $this->belongsTo(DoctorSpecialist::class,'doctor_specialist_id');
 }
 public function practice()
 {
     return $this->hasMany(Practice::class);
 }
}
