<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction1 extends Model
{
    use HasFactory;
    protected $table="transaction1s";
    public function appointment()
    {
        return $this->belongsTo(Appointment::class);
    }
}
