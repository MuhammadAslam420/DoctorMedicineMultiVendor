<?php

namespace App\Http\Livewire\Supplier;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Users;
use Livewire\WithPagination;

class SupplierProductsComponent extends Component
{
    use WithPagination;
    public function deleteProduct($id)
    {
        $product = Product::find($id);
        if($product->image)
        {
            unlink('images/product'.'/'.$product->image);
        }
        if($product->images)
        {
            $images=explode(",", $product->images);
            foreach($images as $image)
            {
              if($image)
              {
                unlink('images/product'.'/'.$image);

              }
            }
        }
        $product->delete();
        session()->flash('message','Product has been deleted by you successfully!');
    }
    public function render()
    {
        $products=Product::
        where('user_id','=',Auth::user()->id)
            ->Paginate(6);
        return view('livewire.supplier.supplier-products-component',['products'=>$products])->layout('layouts.supplier.base');
    }
}
