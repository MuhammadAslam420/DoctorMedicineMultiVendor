<?php

namespace App\Http\Livewire\Pharmacist;

use Livewire\Component;
use App\Models\Pharmacist;
use App\Models\User;
use App\Models\Perscription;
use App\Models\PhramacyOrder;
use Auth;
use Carbon\Carbon;
use Livewire\WithPagination;

class PharmacistAllShopSalesComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $user=Pharmacist::where('user_id',Auth::user()->id)->first();
        $sales=PhramacyOrder::where('pharmacist_id',$user->id)->paginate(10);
        return view('livewire.pharmacist.pharmacist-all-shop-sales-component',['sales'=>$sales])->layout('layouts.pharmacist.base');
    }
}
