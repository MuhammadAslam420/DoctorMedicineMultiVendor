<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use Carbon\Carbon;
use App\Models\Appointment;
class AdminTodayDoctorClinicCheckupComponent extends Component
{
    public function render()
    {
        $appointments=Appointment::where('meeting_status','held')->whereDate('created_at',Carbon::today())->paginate(10);
        return view('livewire.admin.admin-today-doctor-clinic-checkup-component',['appointments'=>$appointments])->layout('layouts.admin.base');
    }
}
