<?php

namespace App\Http\Livewire\Pharmacist;

use Livewire\Component;
use App\Models\PhramacyOrder;
use Illuminate\Support\Facades\Auth;
use  Illuminate\Support\Facades\DB;
use App\Models\Pharmacist;

class PharmacistOrdersDetailComponent extends Component
{
    public $order_id;

    public function mount($order_id)
    {
        $this->order_id=$order_id;
    }
    public function render()
    {
        
        $order=PhramacyOrder::where('id',$this->order_id)->first();
        return view('livewire.pharmacist.pharmacist-orders-detail-component',['order'=>$order])->layout('layouts.pharmacist.base');
    }
}
