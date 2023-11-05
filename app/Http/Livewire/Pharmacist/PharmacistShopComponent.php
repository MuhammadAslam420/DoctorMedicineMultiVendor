<?php

namespace App\Http\Livewire\Pharmacist;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\PharmacistTable;
use App\Models\Pharmacist;
use app\Models\User;
use Illuminate\Support\Facades\Auth;
use Cart;

class PharmacistShopComponent extends Component
{
    public $qty;
    public function mount()
    {
        $this->qty = 1;
    }
    public function store($product_id,$product_name,$product_price)
    {
        Cart::instance('cart')->add($product_id,$product_name,$this->qty,$product_price)->associate('App\Models\PharmacistTable');
        session()->flash('success_msg','Product Has been Added your Cart');
    }
    public function render()
    {
        $pharmacist=Pharmacist::where('user_id','=',Auth::user()->id)->first();
        return view('livewire.pharmacist.pharmacist-shop-component',['pharmacist'=>$pharmacist])->layout('layouts.pharmacist.base');
    }
}
