<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Coupon;
use Livewire\WithPagination;

class AdminCouponComponent extends Component
{
    use WithPagination;
    public $coupon_id;
    public function deletecoupon($coupon_id)
    {
        $coupon=Coupon::find($coupon_id);
        $coupon->delete();
        session()->flash('message','Coupon HAs Been Deleted!');

    }
    public function render()
    {
        $coupons=Coupon::paginate(4);
        return view('livewire.admin.admin-coupon-component',['coupons'=>$coupons])->layout('layouts.admin.base');
    }
}
