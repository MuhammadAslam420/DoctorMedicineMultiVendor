<?php

namespace App\Http\Livewire\Doctor;

use Livewire\Component;
use App\Models\Appointment;
use App\Models\Transaction1;
use App\Models\Doctor;
use App\Models\User;
use App\Models\Onlinemeeting;
use Illuminate\Support\Facades\Auth;
use App\Models\SubscriptionPackage;
use Livewire\WithPagination;
class DoctorDashboardComponent extends Component
{
 use WithPagination;
    public function render()
    {
        $packages=SubscriptionPackage::all();
        $doctor=Doctor::where('user_id',Auth::user()->id)->first();
        $totalAppointment=Appointment::where('doctor_id',$doctor->id)->count();
        $totalRevenueAppointment=Appointment::where('meeting_status','!=','cancel')->where('doctor_id',$doctor->id)->where('meeting_type','online')->sum('subtotal');
        $totalPysicalRevenueAppointment=Appointment::where('meeting_status','!=','cancel')->where('doctor_id',$doctor->id)->where('meeting_type','physical')->sum('subtotal');
        $totalPysicalAppointment=Appointment::where('meeting_status','!=','cancel')->where('doctor_id',$doctor->id)->where('meeting_type','physical')->count();
        $totalOnlineAppointment=Appointment::where('meeting_status','!=','cancel')->where('doctor_id',$doctor->id)->where('meeting_type','online')->count();
        $totalCancelAppointment=Appointment::where('meeting_status','=','cancel')->where('doctor_id',$doctor->id)->count();
        $PysicalAppointment = Appointment::where('meeting_status', '!=', 'cancel')->where('doctor_id', $doctor->id)->where('meeting_type', 'physical')->paginate(12);
        return view('livewire.doctor.doctor-dashboard-component',['totalAppointment'=>$totalAppointment,
        'totalRevenueAppointment'=>$totalRevenueAppointment,
        'totalPysicalRevenueAppointment'=>$totalPysicalRevenueAppointment,
        'totalOnlineAppointment'=>$totalOnlineAppointment,
        'totalPysicalAppointment'=>$totalPysicalAppointment,
        'totalCancelAppointment'=>$totalCancelAppointment, 'packages'=> $packages, 'PysicalAppointment'=> $PysicalAppointment])->layout('layouts.doctor.base');
    }
}
