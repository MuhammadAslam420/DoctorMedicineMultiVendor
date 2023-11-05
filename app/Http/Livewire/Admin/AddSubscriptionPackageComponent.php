<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\SubscriptionPackage;
class AddSubscriptionPackageComponent extends Component
{
    public $name;
    public $price;
    public $description;
    public $days;
    public function addNewPackage()
    {
       $pack=new SubscriptionPackage();
      // dd($this->description,$this->price,$this->name,$this->days);
       $pack->name=$this->name;
       $pack->price=$this->price;
       $pack->days=$this->days;
       $pack->description=$this->description;
       $pack->save();
        $this->name='';
        $this->price='';
        $this->days='';
        $this->description='';
        return session()->flash('message','Package has been added');

    }

    public function render()
    {
        return view('livewire.admin.add-subscription-package-component')->layout('layouts.admin.base');
    }
}
