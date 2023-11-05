<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Appointment;

class AdminAppointmentDetailComponent extends Component
{
    public $appointment_id;
    public $image;
    public function mount($appointment_id)
    {
        $this->appointment_id=$appointment_id;
    }
    public function updateAppointmentStatus($appointment_id,$status)
    {
    $appointment= Appointment::find($appointment_id);
    $appointment->meeting_status=$status;
    
    $appointment->save();
    session()->flash('appointment_msg','Appointment Status has been Updated');
}
    public function render()
    {
        $appointment=Appointment::find($this->appointment_id);
        return view('livewire.admin.admin-appointment-detail-component',['appointment'=>$appointment])->layout('layouts.admin.base');
    }
}
