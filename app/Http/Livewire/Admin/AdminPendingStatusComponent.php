<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Order;
class AdminPendingStatusComponent extends Component
{
    use WithPagination;
    public function updateOrderStatus($order_id,$status)
    {
    $order = Order::find($order_id);
    $order->status=$status;
    if($status ==='delivered')
    {
        $order->delivered_date=DB::raw('CURRENT_DATE');
    }
    else if($status === 'canceled')
    {
        $order->canceled_date=DB::raw('CURRENT_DATE');
    }
    $order->save();
    session()->flash('order_msg','Order Status has been Updated');
}
    public function render()
    {
        $orderspending=Order::where('status','!=' ,'delivered')->paginate(12);
        return view('livewire.admin.admin-pending-status-component',['orderspending'=>$orderspending])->layout('layouts.admin.base');
    }
}
