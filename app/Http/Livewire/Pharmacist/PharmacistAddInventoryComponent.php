<?php

namespace App\Http\Livewire\Pharmacist;

use Livewire\Component;
use App\Models\User;
use App\Models\PharmacistTable;
use Illuminate\Support\Str;
use App\Models\Pharmacist;
use Auth;

class PharmacistAddInventoryComponent extends Component
{
    public $name;
    public $slug;
    public $manufacture_name;
    public $description;
    public $price;
    public $SKU;
    public $quantity;
    public $expiry_date;
    public $weight;

    public function generateslug()
    {
        $this->slug =Str::slug($this->name,'-');
    }
   
    public function updated($field)
    {
        $this->validateOnly($field,[
        'name'=>'required',
        'slug'=>'required|unique:pharmacist_tables',
        'manufacture_name'=>'required',
        'description'=>'required',
        'price'=>'required|numeric',
        'SKU'=>'required',
        'quantity'=>'required|numeric', 
        'weight'=>'required',
        'expiry_date'=>'required',


    ]);
     }
    public function addProduct()
    {
    $this->validate([
        'name'=>'required',
        'slug'=>'required|unique:pharmacist_tables',
        'manufacture_name'=>'required',
        'description'=>'required',
        'price'=>'required|numeric',
        'SKU'=>'required',
        'quantity'=>'required|numeric', 
        'weight'=>'required',
        'expiry_date'=>'required',


    ]);

    $product =  new PharmacistTable();
    $product->name=$this->name;
    $user=Pharmacist::where('user_id','=',Auth::user()->id)->first();
    $product->pharmacist_id=$user->id;
    $product->slug=$this->slug;
    $product->manufacture_name=$this->manufacture_name;
    $product->description=$this->description;
    $product->price=$this->price;
    $product->SKU=$this->SKU;
    $product->weight=$this->weight;
    $product->quantity=$this->quantity;
    $product->save();
    session()->flash('message','Product has been added successfully!');

}
    public function render()
    {
        return view('livewire.pharmacist.pharmacist-add-inventory-component')->layout('layouts.pharmacist.base');
    }
}
