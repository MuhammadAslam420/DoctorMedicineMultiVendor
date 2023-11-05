<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\models\User;
use App\Models\Product;
use Livewire\WithPagination;
use Auth;
use Cart;
class AdminPharmacyShopComponent extends Component
{
    use withPagination;
    public $qty;
    public function mount()
    {
        $this->qty = 1;
    }
    public function store($product_id,$product_name,$product_price)
    {
        Cart::instance('cart')->add($product_id,$product_name,$this->qty,$product_price)->associate('App\Models\Product');
        session()->flash('success_msg','Product Has been Added your Cart');
    }
    public function render()
    {
        $products=Product::where('user_id',Auth::user()->id)->paginate(20);
        return view('livewire.admin.admin-pharmacy-shop-component',['products'=>$products])->layout('layouts.admin.base');
    }
}
