<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use Livewire\WithPagination;
use Cart;
use Auth;

class BestSellingComponet extends Component
{
    public $sorting;
    public $pagesize;
    public $min_price;
    public $max_price;
    public function mount()
    {
        $this->sorting='default';
        $this->pagesize=12;
        $this->min_price=10;
        $this->max_price=1000;
    }
    public function store($product_id,$product_name,$product_price)
    {
        Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        session()->flash('success_msg','Product Has been Added your Cart');
        return redirect()->route('product.cart');
    }
    use WithPagination;
    public function addToWishlist($product_id,$product_name,$product_price)
    {
        Cart::instance('wishlist')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        $this->emitTo('wish-list-count-component','refreshComponent');
    }
    public function removeFromWishlist($product_id)
    {
         foreach(Cart::instance('wishlist')->content() as $witems)
         {
             if($witems->id == $product_id)
             {
              Cart::instance('wishlist')->remove($witems->rowId);
              $this->emitTo('wish-list-count-component','refreshComponent');
              return;
               
             }
         }
    }
    public function render()
    {
        if($this->sorting=='date'){
            $products=Product::whereBetween('regular_price',[$this->min_price,$this->max_price])->orderBy('created_at','DESC')->paginate($this->pagesize);
        }
        elseif
        ($this->sorting=='price'){
            $products=Product::whereBetween('regular_price',[$this->min_price,$this->max_price])->orderBy('regular_price','ASC')->paginate($this->pagesize);
        }
        elseif($this->sorting=='price-desc'){
            $products=Product::whereBetween('regular_price',[$this->min_price,$this->max_price])->orderBy('regular_price','DESC')->paginate($this->pagesize);


        }
        else{
            $products=Product::whereBetween('regular_price',[$this->min_price,$this->max_price])->paginate($this->pagesize);

        }
        $categories=Category::all();
        
        $related_products=Product::inRandomOrder()->limit(3)->get();
        if(Auth::check()){
            Cart::instance('cart')->store(Auth::user()->email);
            Cart::instance('wishlist')->store(Auth::user()->email);

        }

        return view('livewire.best-selling-componet',['products'=>$products,'categories'=>$categories,'related_products'=>$related_products])->layout("layouts.base");
    }
}
