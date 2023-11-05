<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Order;
use Livewire\WithPagination;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\FormCollection;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\OrderExports;
use Illuminate\Support\Facades\Mail;
use App\Mail\DeliveryMail;



class AdminOrderComponent extends Component
{ 
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
    $this->orderConfirmationMail($order);  

}
public function export($exl)
{
    return Excel::download(new OrderExports,"orders.$exl");
}
public function orderConfirmationMail($order)
{
    Mail::to($order->email)->send(new DeliveryMail($order));

  }

public function render()
{
    $orders=Order::sortable()->paginate(100);
        return view('livewire.admin.admin-order-component',['orders'=>$orders])->layout('layouts.admin.base');
    }
}
