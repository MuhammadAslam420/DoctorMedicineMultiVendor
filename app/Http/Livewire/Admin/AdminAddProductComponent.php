<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Auth;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use App\Models\Subcategory;

class AdminAddProductComponent extends Component
{
    use WithFileUploads;

    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $sale_price;
    public $SKU;
    public $stock_status;
    public $featured;
    public $quantity;
    public $image;
    public $category_id;
    public $images;
    public $scategory_id;

    public function mount()
    {
        $this->stock_status='instock';
        $this->featured=0;
    }
    public function generateslug()
    {
        $this->slug =Str::slug($this->name,'-');
    }

    public function updated($field)
    {
        $this->validateOnly($field,[
        'name'=>'required',
        'slug'=>'required|unique:products',
        'short_description'=>'required',
        'description'=>'required',
        'regular_price'=>'required|numeric',
        'sale_price'=>'numeric',
        'SKU'=>'required',
        'stock_status'=>'required',
        'quantity'=>'required|numeric',
        'image'=>'required|mimes:jpeg,jpg,png',
        'category_id'=>'required',


    ]);
     }
    public function addProduct()
    {
    $this->validate([
    'name'=>'required',
    'slug'=>'required|unique:products',
    'short_description'=>'required',
    'description'=>'required',
    'regular_price'=>'required|numeric',
    'sale_price'=>'numeric',
    'SKU'=>'required',
    'stock_status'=>'required',
    'quantity'=>'required|numeric',
    'image'=>'required|mimes:jpeg,jpg,png',
    'category_id'=>'required',


    ]);

    $product =  new Product();
    $product->name=$this->name;
    $product->user_id=Auth::user()->id;
    $product->slug=$this->slug;
    $product->short_description=$this->short_description;
    $product->description=$this->description;
    $product->regular_price=$this->regular_price;
    $product->sale_price=$this->sale_price;
    $product->SKU=$this->SKU;
    $product->stock_status=$this->stock_status;
    $product->featured=$this->featured;
    $product->quantity=$this->quantity;
    $imageName =Carbon::now()->timestamp.'.'.$this->image->extension();
    $this->image->storeAs('images/product',$imageName);
    $product->image=$imageName;
    if($this->images)
    {
        $imagesname='';
        foreach($this->images as $key=>$image)
        {
            $imgName =Carbon::now()->timestamp.$key.'.'.$image->extension();
            $image->storeAs('images/product',$imgName);
            $imagesname =$imagesname .','.$imgName;

        }
        $product->images=$imagesname;
    }
    $product->category_id=$this->category_id;
    if($this->scategory_id)
    {
        $product->subcategory_id=$this->scategory_id;
    }
    $product->save();
    session()->flash('message','Product has been added successfully!');

}
    public function changeSubcategory()
    {
        $this->scategory_id=0;
    }
    public function render()
    {
        $scategories=Subcategory::where('category_id',$this->category_id)->get();
        $categories=Category::all();
        return view('livewire.admin.admin-add-product-component',['categories'=>$categories,'scategories'=>$scategories])->layout('layouts.admin.base');
    }
}
