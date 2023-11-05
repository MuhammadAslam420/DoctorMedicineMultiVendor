<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhramacyOrder extends Model
{
    use HasFactory;
    protected $table='phramacy_orders';
    public function pharmacist()
    {
        return $this->belongsTo(Pharmacist::class);
    }
    public function items()
    {
        return $this->hasMany(PharmacyOrderItem::class);
    }
 
  
}
