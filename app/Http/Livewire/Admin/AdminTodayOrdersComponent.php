<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Order;
use Livewire\WithPagination;
use Carbon\Carbon;

class AdminTodayOrdersComponent extends Component
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
        $orders=Order::where('status','delivered')->whereDate('created_at',Carbon::today())->paginate(12);
        return view('livewire.admin.admin-today-orders-component',['orders'=>$orders])->layout('layouts.admin.base');
    }
}
