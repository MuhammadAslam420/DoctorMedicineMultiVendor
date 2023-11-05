<?php

namespace App\Http\Livewire\Pharmacist;

use Livewire\Component;
use Auth;
use App\Models\User;
use App\Models\Pharmacist;
use App\Models\Perscription;
use Livewire\WithPagination;
use Carbon\Carbon;

class TodayPerscriptionsComponent extends Component
{
    use WithPagination;
    public function updatePerscriptionStatus($perscription_id,$status)
    {
        $order = Perscription::find($perscription_id);
        $order->status=$status;
        $order->save();
        session()->flash('order_msg','Order Status has been Updated');
    }
    public function render()
    {
        $user=Pharmacist::where('user_id','=',Auth::user()->id)->first();
        $perscriptions=Perscription::where('pharmacist_id','=',$user->id)->where('status','!=','canceled')->whereDate('created_at',Carbon::today())->paginate(10);
        return view('livewire.pharmacist.today-perscriptions-component',['perscriptions'=>$perscriptions])->layout('layouts.pharmacist.base');
    }
}
