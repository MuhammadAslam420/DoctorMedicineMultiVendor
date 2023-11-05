<?php

namespace App\Http\Livewire\Deliveryboy;

use Livewire\Component;
use App\Models\User;
use App\Models\Order;

class DeliveryBoyViewOrderDetailComponent extends Component
{ 
    public $order_id;
    public function mount($order_id)
    {
        $this->order_id=$order_id;;
    }
    public function render()
    {
        $order=Order::find($this->order_id);
        return view('livewire.deliveryboy.delivery-boy-view-order-detail-component',['order'=>$order])->layout('layouts.deliveryboy.base');
    }
}
