<?php

namespace App\Http\Livewire\Deliverymanager;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Manager;

class DeliveryManagerProfileComponent extends Component
{
    public function render()
    {
        $profile=manager::where('user_id',Auth::user()->id)->first();
        if(!$profile){
            $profile=new Manager();
            $profile->user_id=Auth::user()->id;
            $profile->save();
        
        }
        $user=User::find(Auth::user()->id);
        return view('livewire.deliverymanager.delivery-manager-profile-component',['user'=>$user])->layout('layouts.deliverymanager.base');
    }
}
