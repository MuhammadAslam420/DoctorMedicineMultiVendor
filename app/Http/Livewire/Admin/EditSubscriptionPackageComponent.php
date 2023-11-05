<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\SubscriptionPackage;

class EditSubscriptionPackageComponent extends Component
{
    public $name;
    public $price;
    public $days;
    public $description;
    public $p_id;
    public function mount($id)
    {
       $this->p_id=$id;
       $package=SubscriptionPackage::find($id);
       $this->name=$package->name;
        $this->price = $package->price;
        $this->days = $package->days;
        $this->description = $package->description;
    }
    public function editPackage()
    {
        $package = SubscriptionPackage::find($this->p_id);
          $package->name=$this->name;
          $package->price=$this->price;
          $package->days=$this->days;
          $package->description=$this->description;
          $package->save();
          return redirect()->route('admin.subscriptionpackages')->with('message','Package has been edit');

    }
    public function render()
    {
        return view('livewire.admin.edit-subscription-package-component')->layout('layouts.admin.base');
    }
}
