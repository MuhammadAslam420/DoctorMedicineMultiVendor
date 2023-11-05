<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Order;
use Auth;
use Livewire\WithPagination;
use App\Models\Appointment;
use App\Models\Perscription;

class UserDashboardComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $orders=Order::orderBy('created_at','DESC')->where('user_id',Auth::user()->id)->get()->take(10);
        $totalcost=Order::where('status','!=','canceled')->where('user_id',Auth::user()->id)->sum('total');
        $totalpurchase=Order::where('status','!=','canceled')->where('user_id',Auth::user()->id)->count();
        $totaldelivered=Order::where('status','delivered')->where('user_id',Auth::user()->id)->count();
        $totalcancel=Order::where('status','canceled')->where('user_id',Auth::user()->id)->count();
        $totalcostAppointment=Appointment::where('meeting_status','!=','canceled')->where('user_id',Auth::user()->id)->where('meeting_type','online')->sum('subtotal');
        $totalpurchaseAppointment=Appointment::where('meeting_status','!=','canceled')->where('user_id',Auth::user()->id)->where('meeting_type','online')->count();
        $totaldeliveredAppointment=Appointment::where('meeting_status','held')->where('user_id',Auth::user()->id)->where('meeting_type','online')->count();
        $totalcancelAppointment=Appointment::where('meeting_status','cancel')->where('user_id',Auth::user()->id)->where('meeting_type','online')->count();
        $appointments=Appointment::where('user_id',Auth::user()->id)->where('meeting_type','online')->paginate(10);
        $totalcostAppointmentp=Appointment::where('meeting_status','!=','canceled')->where('user_id',Auth::user()->id)->where('meeting_type','physical')->sum('subtotal');
        $totalpurchaseAppointmentp=Appointment::where('meeting_status','!=','canceled')->where('user_id',Auth::user()->id)->where('meeting_type','physical')->count();
        $totaldeliveredAppointmentp=Appointment::where('meeting_status','held')->where('user_id',Auth::user()->id)->where('meeting_type','physical')->count();
        $totalcancelAppointmentp=Appointment::where('meeting_status','cancel')->where('user_id',Auth::user()->id)->where('meeting_type','physical')->count();
        $appointmentsp=Appointment::where('user_id',Auth::user()->id)->where('meeting_type','physical')->paginate(10);
        // $totalcostAppointmentp=Appointment::where('meeting_status','!=','canceled')->where('user_id',Auth::user()->id)->where('meeting_type','physical')->sum('subtotal');
        // $totalpurchaseAppointmentp=Appointment::where('meeting_status','!=','canceled')->where('user_id',Auth::user()->id)->where('meeting_type','physical')->count();
        // $totaldeliveredAppointmentp=Appointment::where('meeting_status','held')->where('user_id',Auth::user()->id)->where('meeting_type','physical')->count();
        // $totalcancelAppointmentp=Appointment::where('meeting_status','cancel')->where('user_id',Auth::user()->id)->where('meeting_type','physical')->count();
        $perscriptions=Perscription::where('user_id',Auth::user()->id)->paginate(10);

        return view('livewire.user.user-dashboard-component',['orders'=>$orders,'totalcost'=>$totalcost,
        'totalpurchase'=>$totalpurchase,'totaldelivered'=>$totaldelivered,'totalcancel'=>$totalcancel,
        'appointments'=>$appointments,'totalcostAppointment'=>$totalcostAppointment,'totalpurchaseAppointment'=>$totalpurchaseAppointment,
        'totaldeliveredAppointment'=>$totaldeliveredAppointment,'totalcancelAppointment'=>$totalcancelAppointment,
        'appointmentsp'=>$appointmentsp,'totalcostAppointmentp'=>$totalcostAppointmentp,'totalpurchaseAppointmentp'=>$totalpurchaseAppointmentp,
        'totaldeliveredAppointmentp'=>$totaldeliveredAppointmentp,'totalcancelAppointmentp'=>$totalcancelAppointmentp,
        'perscriptions'=>$perscriptions])->layout('layouts.base');
    }
}
