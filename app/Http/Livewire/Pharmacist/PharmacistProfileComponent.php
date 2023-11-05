<?php

namespace App\Http\Livewire\Pharmacist;

use Livewire\Component;
use App\Models\Pharmacist;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PharmacistProfileComponent extends Component
{
    public function render()
    {
        $pharmacist=Pharmacist::where('user_id',Auth::user()->id)->first();
        if(!$pharmacist){
            $pharmacist=new Pharmacist();
            $pharmacist->user_id=Auth::user()->id;
            $pharmacist->save();
        
        }
        $user=User::find(Auth::user()->id);
        return view('livewire.pharmacist.pharmacist-profile-component',['user'=>$user])->layout('layouts.pharmacist.base');
    }
}
