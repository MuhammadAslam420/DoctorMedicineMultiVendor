<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Product;
use Cart;
use App\Models\Sale;

class DetailsComponent extends Component
{
    public $slug;
    public $qty;
    public function mount($slug)
    {
        $this->slug=$slug;
        $this->qty = 1;
    }
    public function store($product_id,$product_name,$product_price){
        $product=Product::where('id','=',$product_id)->first();
        Cart::instance('cart')->add([
            'id' => $product->id, 
            'name' => $product->name, 
            'qty' => $this->qty, 
            'price' => $product_price, 
            'supplier_id' => $product->user_id,
        ])->associate('App\Models\Product');
        session()->flash('success_message','Item Has Been added to Cart');
        return redirect()->route('product.cart');
    }
    public function increaseQunatity()
    {
        $this->qty++;
    }
    public function decreaseQuantity()
    {
        if($this->qty > 1)
        {
            $this->qty--;
        }
    }
    public function render()
    {
        $product=Product::where('slug',$this->slug)->first();
        $populor_products=Product::inRandomOrder()->limit(3)->get();
        $related_products=Product::where('category_id',$product->category_id)->inRandomOrder()->limit(10)->get();
        $sale=Sale::find(1);
        return view('livewire.details-component',['product'=>$product,'populor_products'=>$populor_products,'related_products'=>$related_products,'sale'=>$sale])->layout('layouts.base');
    }
}
