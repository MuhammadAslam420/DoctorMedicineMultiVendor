<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use Livewire\WithPagination;
use App\Models\User;
use App\Models\OrderItem;
use Illuminate\Support\Facades\DB;

class AdminViewSupplierProductListComponent extends Component
{
    use WithPagination;
    public $user_id;
    public function mount($user_id)
    {
        $this->user_id;
    }
    public function render()
    {
        $orderitems=OrderItem::where('supplier_id',$this->user_id)->count();
        $orderitemcount=OrderItem::where('supplier_id',$this->user_id)->sum('quantity');
        $orderitemtotals=OrderItem::where('supplier_id',$this->user_id)->select(DB::raw('sum((price)*(quantity))as total'))->get()[0]->total;
        $user=User::where('id',$this->user_id)->first();
        $products=Product::where('user_id',$this->user_id)->paginate('10');
        $totalproducts=Product::where('user_id',$this->user_id)->count();
        return view('livewire.admin.admin-view-supplier-product-list-component',['products'=>$products,
        'totalproducts'=>$totalproducts,'user'=>$user,'orderitems'=>$orderitems,'orderitemtotals'=>$orderitemtotals,'orderitemcount'=>$orderitemcount])->layout('layouts.admin.base');
    }
}
