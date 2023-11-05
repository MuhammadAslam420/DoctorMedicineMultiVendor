<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Transaction;
use Livewire\withPagination;

class AdminOnlinePaymentOrdersComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $onlineorders=Transaction::where('status', 'approved')->where('mode','card')->paginate(12);
        return view('livewire.admin.admin-online-payment-orders-component',['onlineorders'=>$onlineorders])->layout('layouts.admin.base');
    }
}
