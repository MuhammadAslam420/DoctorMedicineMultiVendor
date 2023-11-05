<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Pharmacist;
use App\Models\User;
use App\Models\Perscription;
use App\Models\PhramacyOrder;
use Auth;
use Carbon\Carbon;
use Livewire\WithPagination;

class AdminShopSalesComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $sales=PhramacyOrder::where('pharmacist_id',Auth::user()->id)->paginate(10);
        return view('livewire.admin.admin-shop-sales-component',['sales'=>$sales])->layout('layouts.admin.base');
    }
}
