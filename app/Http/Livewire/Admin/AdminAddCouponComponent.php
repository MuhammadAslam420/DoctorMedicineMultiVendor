<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Coupon;

class AdminAddCouponComponent extends Component
{
    public $code;
    public $type;
    public $value;
    public $cart_value;
    public $expirey_date;

    public function update($feilds)
    {
        $this->validateOnly($feilds,[
            'code'=>'required',
            'type'=>'required|unique:coupons',
            'value'=>'required|numeric',
            'cart_value'=>'required|numeric',
            'expirey_date'=>'required',
            
        ]);
    }
    public function addcoupon()
    {
        $this->validate([
            'code'=>'required',
            'type'=>'required|unique:coupons',
            'value'=>'required|numeric',
            'cart_value'=>'required|numeric',
            'expirey_date'=>'required',
            
        ]);
         $coupon=new Coupon();
         $coupon->code=$this->code;
         $coupon->type=$this->type;
         $coupon->value=$this->value;
         $coupon->cart_value=$this->cart_value;
         $coupon->expirey_date=$this->expirey_date;
         $coupon->save();
         session()->flash('message','Coupon is added right now by you successfully!');
    }
    public function render()
    {
        return view('livewire.admin.admin-add-coupon-component')->layout('layouts.admin.base');
    }
}
