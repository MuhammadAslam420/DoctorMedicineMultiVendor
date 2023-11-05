<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PharmacyOrderItem extends Model
{
    use HasFactory;
    protected $table="pharmacy_order_items";
    public function phramacyOrder()
    {
        return $this->belongsTo(PhramacyOrder::class);
    }
    public function product()
    {
        return $this->belongsTo(PharmacistTable::class);
    }    
}
