<?php

namespace App\Http\Livewire\Supplier;

use Livewire\Component;
use App\Models\Product;
use App\Models\User;
use App\Models\OrderItem;
use Livewire\WithPagination;
use Auth;

class SupplierInventoryComponent extends Component
{
    use WithPAgination;
    public function render()
    {
        $products=Product::where('user_id',Auth::user()->id)->paginate(5);
        return view('livewire.supplier.supplier-inventory-component',['products'=>$products])->layout('layouts.supplier.base');
    }
}
