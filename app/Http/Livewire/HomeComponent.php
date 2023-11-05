<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\HomeSlider;
use App\Models\HomeCategory;
use App\Models\Product;
use App\Models\Category;
use App\Models\Sale;
use App\Models\Doctor;
use App\Models\Bloggger;
use Cart;
use App\Models\DoctorSpecialist;
use Illuminate\Support\Facades\Auth;
use Livewire\withPagination;

class HomeComponent extends Component
{
    protected $listeners = ['refreshComponent'=>'$refresh'];
    use WithPagination;


    public function store($product_id,$product_name,$product_price)
    {
        Cart::instance('cart')->add($product_id,$product_name,1,$product_price)->associate('App\Models\Product');
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
              //return;

             }
         }
    }
    public function render()
    {

        $specials=Product::orderBy('created_at','DESC')->get()->take(8);
        $news=Product::orderBy('created_at','ASC')->get()->take(8);
        $featureds=Product::where('featured',1)->inRandomOrder()->get()->take(8);
        $tproducts=Product::where('featured',0)->inRandomOrder()->get()->take(6);
        $blogs=Bloggger::limit(2)->get();
        $category = HomeCategory::find(1);
        $cats =explode(',', $category->sel_categories);
        $hcategories=Category::whereIn('id',$cats)->get();
        $no_of_products =$category->no_of_products;
        $sproducts=Product::where('sale_price','>',0)->inRandomOrder()->get()->take(8);
        $sale=Sale::find(1);
       $doctors=Doctor::where('admin_approval',1)->inRandomOrder()->limit(4)->get();
        if(Auth::check()){
            Cart::instance('cart')->restore(Auth::user()->email);
            Cart::instance('wishlist')->restore(Auth::user()->email);


        }
       // dd($categories);
        $categories=Category::inRandomOrder()->limit(12)->get();
        $cats=Category::inRandomOrder()->limit(8)->get();
        $specialists=DoctorSpecialist::inRandomOrder()->limit(6)->get();
        return view('livewire.home-component',['cats'=>$cats,'news'=>$news,'specialists'=>$specialists,'specials'=>$specials,'featureds'=>$featureds,'tproducts'=>$tproducts,'categories'=>$categories,'hcategories'=>$hcategories,'no_of_products'=>$no_of_products,'sproducts'=>$sproducts,'sale'=>$sale,'doctors'=>$doctors,'blogs'=>$blogs])->layout('layouts.base');
    }
}
