<?php

namespace App\Http\Livewire\Admin;
use App\Models\Coupon;

use Livewire\Component;

class AdminEditCouponComponent extends Component
{
    public $code;
    public $type;
    public $value;
    public $cart_value;
    public $coupon_id;
    public $expirey_date;

    public function mount($coupon_id){
        $coupon=Coupon::find($coupon_id);
        $this->code=$coupon->code;
        $this->type=$coupon->type;
        $this->value=$coupon->value;
        $this->cart_value=$coupon->cart_value;
        $this->expirey_date=$coupon->expirey_date;
        $this->id=$coupon->id;
    }

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
    public function editcoupon()
    {
        $this->validate([
            'code'=>'required',
            'type'=>'required|unique:coupons',
            'value'=>'required|numeric',
            'cart_value'=>'required|numeric',
            'expirey_date'=>'required',
            
        ]);
         $coupon=Coupon::find($this->coupon_id);
         $coupon->code=$this->code;
         $coupon->type=$this->type;
         $coupon->value=$this->value;
         $coupon->cart_value=$this->cart_value;
         $coupon->expirey_date=$this->expirey_date;
         $coupon->save();
         session()->flash('message','Coupon is updated right now by you successfully!');
    }
    public function render()
    {
        return view('livewire.admin.admin-edit-coupon-component')->layout('layouts.admin.base');
    }
}
