<?php

namespace App\Http\Livewire\Deliverymanager;

use Livewire\Component;
use App\Models\User;
use App\Models\Order;

class DeliveryManagerOrderDetailsComponent extends Component
{
    public $order_id;
    public function mount($order_id)
    {
        $this->order_id=$order_id;;
    }
    public function render()
    {
        $order=Order::find($this->order_id);
        
        return view('livewire.deliverymanager.delivery-manager-order-details-component',['order'=>$order])->layout('layouts.deliverymanager.base');
    }
}
