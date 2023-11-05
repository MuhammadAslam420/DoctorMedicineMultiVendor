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


class PharmacistDetailComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $user=Pharmacist::where('user_id',Auth::user()->id)->first();
        $sales=PhramacyOrder::where('pharmacist_id',$user->id)->whereDate('created_at',Carbon::today())->paginate(10);
        return view('livewire.pharmacist.pharmacist-detail-component',['sales'=>$sales])->layout('layouts.pharmacist.base');
    }
}
