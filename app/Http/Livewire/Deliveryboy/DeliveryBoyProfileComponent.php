<?php

namespace App\Http\Livewire\Deliveryboy;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\DeliveryBoy;

class DeliveryBoyProfileComponent extends Component
{
    public function render()
    {
        $profile=DeliveryBoy::where('user_id',Auth::user()->id)->first();
        if(!$profile){
            $profile=new DeliveryBoy();
            $profile->user_id=Auth::user()->id;
            $profile->save();
        
        }
        $user=User::find(Auth::user()->id);
        return view('livewire.deliveryboy.delivery-boy-profile-component',['user'=>$user])->layout('layouts.deliveryboy.base');
    }
}
