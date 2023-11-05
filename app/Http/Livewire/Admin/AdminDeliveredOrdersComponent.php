<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\withPagination;
use App\Models\Order;

class AdminDeliveredOrdersComponent extends Component
{
    use WithPagination;

    public function render()
    {
        $all=Order::where('status','delivered')->paginate(10);
        return view('livewire.admin.admin-delivered-orders-component',['all'=>$all])->layout('layouts.admin.base');
    }
}
