<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use App\Models\User;
use App\Models\OrderItem;
use Livewire\WithPagination;
use Auth;

class AdminInventoryComponent extends Component
{
    use WithPAgination;
    public function render()
    {
        $orders=Product::where('user_id',Auth::user()->id)->paginate(10);

        return view('livewire.admin.admin-inventory-component',['orders'=>$orders])->layout('layouts.admin.base');
    }
}
