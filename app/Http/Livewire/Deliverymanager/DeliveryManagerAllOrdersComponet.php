<?php

namespace App\Http\Livewire\Deliverymanager;

use Livewire\Component;
use App\Models\Order;
use Livewire\WithPagination;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\DeliveryMail;


class DeliveryManagerAllOrdersComponet extends Component
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
    $this->orderConfirmationMail($order);
    session()->flash('order_msg','Order Status has been Updated');
}
public function update($order_id,$user_id)
    {
    $order = Order::find($order_id);
    $order->deliveryboy_id=$user_id;
   
    $order->save();
    session()->flash('order_masg','Assign Delivery Boy to ordered successfully');
}
public function orderConfirmationMail($order)
{
    Mail::to($order->email)->send(new DeliveryMail($order));

  }
    public function render()
    {
        $users=User::where('utype','DELBOY')->orderBy('created_at','DESC')->get();
        $orders=Order::paginate(12);
        return view('livewire.deliverymanager.delivery-manager-all-orders-componet',['orders'=>$orders,
        'users'=>$users])->layout('layouts.deliverymanager.base');
    }
}
