<?php

namespace App\Http\Livewire\Doctor;

use Livewire\Component;
use App\Models\Onlinemeeting;
use Livewire\WithPagination;
use App\Models\Appoinment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class DoctorOnlineAppointmentComponent extends Component
{

    public function render()
    {
        $onlines=Onlinemeeting::where('doctor_id','=',Auth::user()->doctor->id)->orderBy('created_at','DESC')->paginate(10);
        return view('livewire.doctor.doctor-online-appointment-component',['onlines'=>$onlines])->layout('layouts.doctor.base');
    }
}
