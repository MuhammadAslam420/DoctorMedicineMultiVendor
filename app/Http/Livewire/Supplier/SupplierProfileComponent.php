<?php

namespace App\Http\Livewire\Supplier;

use Livewire\Component;
use App\Models\Supplier;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class SupplierProfileComponent extends Component
{
    public function render()
    {
        $supplier=Supplier::where('user_id',Auth::user()->id)->first();
        if(!$supplier){
            $supplier=new Supplier();
            $supplier->user_id=Auth::user()->id;
            $supplier->save();
        
        }
        $user=User::find(Auth::user()->id);
        return view('livewire.supplier.supplier-profile-component',['user'=>$user])->layout('layouts.supplier.base');
    }
}
