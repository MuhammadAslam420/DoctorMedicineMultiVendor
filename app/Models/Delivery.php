<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    use HasFactory;
    protected $table='deliveries';
    public function order()
    {
        return $this->hasMany(Order::class);
    }
    public function shipping()
    {
        return $this->hasMany(Shipping::class);
    }
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
