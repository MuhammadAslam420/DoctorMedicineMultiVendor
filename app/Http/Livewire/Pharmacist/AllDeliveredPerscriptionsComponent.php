<?php

namespace App\Http\Livewire\Pharmacist;

use Livewire\Component;
use Auth;
use App\Models\User;
use App\Models\Pharmacist;
use App\Models\Perscription;
use Livewire\WithPagination;

class AllDeliveredPerscriptionsComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $user=Pharmacist::where('user_id','=',Auth::user()->id)->first();
        $perscriptions=Perscription::where('pharmacist_id','=',$user->id)->where('status','=','delivered')->paginate(10);
        return view('livewire.pharmacist.all-delivered-perscriptions-component',['perscriptions'=>$perscriptions])->layout('layouts.pharmacist.base');
    }
}
