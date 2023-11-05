<?php

namespace App\Http\Livewire\Deliveryboy;

use Livewire\Component;
use App\Models\Order;
use Livewire\withPagination;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class DeliverBoyDashboardComponent extends Component
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
public function update($order_id,$user_id)
    {
    $order = Order::find($order_id);
    $order->deliveryboy_id=$user_id;
   
    $order->save();
    session()->flash('order_masg','Assign Delivery Boy to ordered successfully');
}
    public function render()
    { 
        $orders=Order::where('deliveryboy_id',Auth::user()->id)->orderBy('created_at','DESC')->paginate(10);
        return view('livewire.deliveryboy.deliver-boy-dashboard-component',['orders'=>$orders])->layout('layouts.deliveryboy.base');
    }
}
