<?php

namespace App\Http\Livewire\Pharmacist;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\PharmacistTable;
use App\Models\Pharmacist;
use app\Models\User;
use Illuminate\Support\Facades\Auth;
class PharmacistProductComponent extends Component
{
    public function render()
    {
        $pharmacist=Pharmacist::where('user_id','=',Auth::user()->id)->first();
        return view('livewire.pharmacist.pharmacist-product-component',['pharmacist'=>$pharmacist])->layout('layouts.pharmacist.base');
    }
}
