<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PharmacistTable extends Model
{
    use HasFactory;
    protected $table='pharmacist_tables';
    
    public function pharmacist()
    {
        return $this->belongsTo(Pharmacist::class);
    }

}
