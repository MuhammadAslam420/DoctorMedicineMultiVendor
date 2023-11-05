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

class PharmacistDashboardComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $user=Pharmacist::where('user_id',Auth::user()->id)->first();
        $orders=PhramacyOrder::where('pharmacist_id',$user->id)->count();
        $totalAmount=PhramacyOrder::where('pharmacist_id',$user->id)->sum('total');
        $today=PhramacyOrder::where('pharmacist_id',$user->id)->whereDate('created_at',Carbon::today())->count();
        $todayAmount=PhramacyOrder::where('pharmacist_id',$user->id)->whereDate('created_at',Carbon::today())->sum('total');
        $perscriptions=Perscription::where('pharmacist_id',$user->id)->count();
        $cancel=Perscription::where('pharmacist_id',$user->id)->where('status','canceled')->count();
        $delivered=Perscription::where('pharmacist_id',$user->id)->where('status','delivered')->count();
        $ptoday=Perscription::where('pharmacist_id',$user->id)->whereDate('created_at',Carbon::today())->count();
        $sales=PhramacyOrder::where('pharmacist_id',$user->id)->paginate(10);
        return view('livewire.pharmacist.pharmacist-dashboard-component',['orders'=>$orders,'totalAmount'=>$totalAmount,'today'=>$today,
        'todayAmount'=>$todayAmount,'perscriptions'=>$perscriptions,'cancel'=>$cancel,'delivered'=>$delivered,'ptoday'=>$ptoday,'sales'=>$sales])->layout('layouts.pharmacist.base');
    }
}
