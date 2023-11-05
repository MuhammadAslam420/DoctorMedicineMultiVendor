<?php

namespace App\Http\Livewire;
use App\Models\Category;
use App\Models\Product;
use Livewire\WithPagination;
use Livewire\Component;
use Cart;
use Illuminate\Support\Facades\Auth;
use App\Models\Sale;
class SearchComponent extends Component
{
    public $sorting;
    public $pagesize;
    public $min_price;
    public $max_price;
    public $search;
    public $category_id;
    public   $product_cat_id;
    public function mount()
    {
        $this->sorting='default';
        $this->pagesize=12;
        $this->min_price=50;
        $this->max_price=1000;
        $this->fill(request()->only('search','product_cat','product_cat_id'));
    }
    public function store($product_id,$product_name,$product_price)
    {
        Cart::add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        $this->emitTo('cart-count-component','refreshComponent');
    }
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
    public function addToCompare($product_id,$product_name,$product_price)
    {
        Cart::instance('compare')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
        $this->emitTo('compare-count-component','refreshComponent');
    }
    public function removeFromCompare($product_id)
    {
         foreach(Cart::instance('compare')->content() as $citems)
         {
             if($witems->id == $product_id)
             {
              Cart::instance('compare')->remove($citems->rowId);
              $this->emitTo('comapre-count-component','refreshComponent');
              return;

             }
         }
    }
    use WithPagination;
    public function render()
    {
        if($this->sorting=='date'){
            $products=Product::where('category_id','like','%'.$this->category_id.'%')->where('name','like','%'.$this->search.'%')->whereBetween('regular_price',[$this->min_price,$this->max_price])->orderBy('created_at','DESC')->paginate($this->pagesize);
        }
        elseif
        ($this->sorting=='price'){
            $products=Product::where('category_id','like','%'.$this->category_id.'%')->where('name','like','%'.$this->search.'%')->whereBetween('regular_price',[$this->min_price,$this->max_price])->orderBy('regular_price','ASC')->paginate($this->pagesize);
        }
        elseif($this->sorting=='price-desc'){
            $products=Product::where('category_id','like','%'.$this->category_id.'%')->where('name','like','%'.$this->search.'%')->whereBetween('regular_price',[$this->min_price,$this->max_price])->orderBy('regular_price','DESC')->paginate($this->pagesize);


        }
        else{
            $products=Product::where('category_id','like','%'.$this->category_id.'%')->where('name','like','%'.$this->search.'%')->whereBetween('regular_price',[$this->min_price,$this->max_price])->paginate($this->pagesize);
        }
        $sale=Sale::find(1);
        $deals=Product::where('sale_price','>',0)->inRandomOrder()->take(4)->get();
        $new=Product::orderBy('id','desc')->inRandomOrder()->take(4)->get();
        $categories=Category::all();

        return view('livewire.search-component',['sale'=>$sale,'deals'=>$deals,'new'=>$new,'products'=>$products,'categories'=>$categories])->layout("layouts.base");
    }
}
