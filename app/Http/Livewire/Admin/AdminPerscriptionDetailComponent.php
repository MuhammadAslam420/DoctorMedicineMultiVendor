<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Perscription;
use App\Models\Pharmacist;
use App\Models\PharmacistTable;
use App\Models\PerscriptionProduct;
use Illuminate\Http\Request;


class AdminPerscriptionDetailComponent extends Component
{
 
    public $perscription_id;


    
    
    
    public function mount($perscription_id)
    {
        $this->perscription_id=$perscription_id;
        //$perscription=Perscription::find($perscription_id);
        
    }
  
    //  public function store()
    //  {
    //     $perscriptio_product= new PerscriptionProduct();
    //     //$perscription_product->perscription_id=$perscription->id;
    //    // $pharmacist1=PharmacistTable::where('id',$this->product_id)->first();
    //    // $perscription_product->pharmacist_id=$pharmacist1->pharmacist_id;
    //     //$perscription_product->user_id=$perscription->user_id;
    //     $perscription_product->product_id=$this->product_id;
    //     //$perscription_product->product=$pharmacist1->name;
    //     //$perscription_product->price=$pharmacist1->price * $this->qty;
    //    // $perscription_product->tax=$pharmacist1->price * 12/100;
    //     //$perscription_product->total=$pharmacist->price + ($pharmacist1->price * 12/100);
    //     $perscription_product->qty=$this->qty;
    //     $perscription_product->save();
    //     session()->flash('success','Product has been added successfully!');
        


    //  }
    public function render()
    {
        $upload=Perscription::where('id',$this->perscription_id)->first();
        $pharmacists=Pharmacist::all();
        return view('livewire.admin.admin-perscription-detail-component',['upload'=>$upload,'pharmacists'=>$pharmacists])->layout('layouts.admin.base');
    }
}
