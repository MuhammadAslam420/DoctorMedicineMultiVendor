<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;


class Order extends Model
{
    use Sortable;

    use HasFactory;
    protected $table="orders";


	public $sortable = ['id', 'city', 'province','country','total','status', 'created_at', 'updated_at'];
   
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function orderItem()
    {
        return $this->hasMany(OrderItem::class);
    }
    public function shipping()
    {
        return $this->hasOne(Shipping::class);
    }
    public function transaction()
    {
        return $this->hasOne(Transaction::class);
    }
    public function delivery()
    {
        return $this->hasMany(Delivery::class);
    }
}
