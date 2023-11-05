<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\SubscriptionPackage;
class AdminSubscriptionPackagesComponent extends Component
{
    public function render()
    {
        $packages=SubscriptionPackage::all();
        return view('livewire.admin.admin-subscription-packages-component',['packages'=> $packages])->layout('layouts.admin.base');
    }
}
