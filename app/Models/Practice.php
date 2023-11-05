<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Practice extends Model
{
    use HasFactory;
    protected $table="practices";
    public function hospital()
    {
        return $this->belongsTo(Hospital::class);
    }
    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }
}
