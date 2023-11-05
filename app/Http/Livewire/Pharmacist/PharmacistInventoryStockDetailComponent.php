<?php

namespace App\Http\Livewire\Pharmacist;

use Livewire\Component;
use App\Models\User;
use Auth;
use App\Models\PharmacistTable;
use App\Models\Pharmacist;
use Livewire\WithPagination;

class PharmacistInventoryStockDetailComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $user=Pharmacist::where('user_id',Auth::user()->id)->first();
        $products=PharmacistTable::where('pharmacist_id',$user->id)->get();
        return view('livewire.pharmacist.pharmacist-inventory-stock-detail-component',['products'=>$products])->layout('layouts.pharmacist.base');
    }
}
