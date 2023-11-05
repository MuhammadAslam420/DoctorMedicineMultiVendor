<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Product;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use App\Models\Category;
use Auth;
class AdminApprovalSupplierProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $user_id;
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
    public $newimage;
    public $product_id;

    public $images;
    public $newimages;
    public $approval;

    public function mount($product_slug)
    {
    
    $product= Product::where('slug',$product_slug)->first();
    $this->name=$product->name;
    $this->slug=$product->slug;
    $this->short_description=$product->short_description;
    $this->description=$product->description;
    $this->regular_price=$product->regular_price;
    $this->sale_price=$product->sale_price;
    $this->SKU=$product->SKU;
    $this->stock_status=$product->stock_status;
    $this->featured=$product->featured;
    $this->approval=$product->admin_approval;
    $this->quantity=$product->quantity;
    $this->image=$product->image;
    $this->images=explode(",",$product->images);
    $this->category_id=$product->category_id;
    $this->product_id=$product->id;

   
    }

    public function generateslug()
    {
        $this->slug =Str::slug($this->name,'-');
    }
    public function updated($field)
    {
        $this->validateOnly($field,[
        'name'=>'required',
        'slug'=>'required',
        'short_description'=>'required',
        'description'=>'required',
        'regular_price'=>'required|numeric',
        'sale_price'=>'numeric',
        'SKU'=>'required',
        'stock_status'=>'required',
        'quantity'=>'required|numeric',
        'category_id'=>'required'
        ]);
        if($this->newimage)
        {
            $this->validateOnly($field,[
                'newimage'=>'required|mimes:jpeg,jpg,png' 

            ]); 
        }
     }
    public function updateProduct()
    {
        $this->validate([
            'name'=>'required',
            'slug'=>'required',
            'short_description'=>'required',
            'description'=>'required',
            'regular_price'=>'required|numeric',
            'sale_price'=>'numeric',
            'SKU'=>'required',
            'stock_status'=>'required',
            'quantity'=>'required|numeric',
            'category_id'=>'required'
            ]);
            if($this->newimage)
    {
        $this->validate([
            'newimage'=>'required|mimes:jpeg,jpg,png'

        ]); 
    }
        $product=Product::find($this->product_id);
        $product->name = $this->name;
        $product->slug = $this->slug;
        $product->short_description=$this->short_description;
        $product->description=$this->description;
        $product->regular_price=$this->regular_price;
        $product->sale_price=$this->sale_price;
        $product->SKU=$this->SKU;
        $product->stock_status=$this->stock_status;
        $product->featured=$this->featured;
        $product->admin_approval=$this->approval;
        $product->quantity=$this->quantity;
        if($this->newimage)
        {
            unlink('images/product'.'/'.$product->image);
            $imagename=Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('images/product',$imagename);
             $products->image=$imagename;
        }
        if($this->newimages)
        {
            if($product->images)
           {
                $images=explode(",",$product->images);
                foreach($images as $image)
                {
                    if($image)
                    {
                        unlink('images/product'.'/'.$image);
                    }

                }

           }
        $imagesname="";
        foreach($this->newimages as $key=>$image)
        {
            $imagename=Carbon::now()->timestamp.$key.'.'.$image->extension();
            $image->storeAs('images/product',$imagename);
            $imagesname=$imagesname.','.$imagename;
        }
        $product->images= $imagesname;
         }
        $product->category_id=$this->category_id;
        
        $product->save();
        session()->flash('message','Product has been Edit successfully!');
    }

    public function render()
    {
        $categories=Category::all();
        return view('livewire.admin.admin-approval-supplier-product-component',['categories'=>$categories])->layout('layouts.admin.base');
    }
}
