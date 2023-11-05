<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\PhramacyOrder;
use Auth;
use App\Models\User;
use Livewire\WithPagination;

class AdminShopOrderComponent extends Component
{
    use WithPagination;
    public $order_id;

    public function mount($order_id)
    {
        $this->order_id=$order_id;
    }
    public function render()
    {
        $order=PhramacyOrder::where('id',$this->order_id)->first();
        return view('livewire.admin.admin-shop-order-component',['order'=>$order])->layout('layouts.admin.base');
    }
}
