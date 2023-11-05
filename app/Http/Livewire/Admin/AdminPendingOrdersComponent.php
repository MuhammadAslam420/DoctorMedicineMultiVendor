<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Transaction;
use Livewire\WithPagination;


class AdminPendingOrdersComponent extends Component
{
    use WithPagination;
    public function updateOrderStatus($order_id,$status)
    {
    $order = Transaction::find($order_id);
    $order->status=$status;
    $order->save();
    session()->flash('order_msg','Order Status has been Updated');
}

    public function render()
    {
        $pendingorders=Transaction::where('status', 'pending')->paginate(12);
        return view('livewire.admin.admin-pending-orders-component',['pendingorders'=>$pendingorders])->layout('layouts.admin.base');
    }
}
