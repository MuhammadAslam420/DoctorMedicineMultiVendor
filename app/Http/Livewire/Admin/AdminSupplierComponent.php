<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use App\Models\Users;
use Livewire\WithPagination;
use Auth;
class AdminSupplierComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $products=Product::
        where('user_id','!=',Auth::user()->id)
            ->Paginate(12);
        return view('livewire.admin.admin-supplier-component',['products'=>$products])->layout('layouts.admin.base');
    }
}
