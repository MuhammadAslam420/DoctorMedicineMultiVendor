<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use App\Models\Order;
Use App\Models\OrderItem;
use App\Models\Transaction;
use App\Models\Supplier;

class AdminViewSupplierProductDetailsComponent extends Component
{
    public $product_id;
    public function mount($product_id)
    {
        $this->product_id;
    }
    public function render()
    {
        $product=Product::where('id',$this->product_id)->first();
        return view('livewire.admin.admin-view-supplier-product-details-component',['product'=>$product])->layout('layouts.admin.base');
    }
}
