<?php

namespace App\Http\Livewire\Doctor;

use Livewire\Component;
use App\Models\Appointment;
use Carbon\Carbon;
use App\Models\Onlinemeeting;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Mail;
use App\Mail\AppointmentStatusMail;

class DoctorOnlineAppointmentDetailComponent extends Component
{
    use withFileUploads;
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
    $this->orderConfirmationMail($appointment);  

}
public function updateAppointmentPerscription()
{
$appointment= Onlinemeeting::where('appointment_id',$this->appointment_id)->first();
$imageName =Carbon::now()->timestamp.'.'.$this->image->extension();
$this->image->storeAs('images/patients',$imageName);
$appointment->doctor_perscription=$imageName;
$appointment->save();
session()->flash('aperscription_msg','Perscription has been Updated');
}
public function orderConfirmationMail($appointment)
{
    Mail::to($appointment->email)->send(new DAppointmentStausMail($appointment));

  }
    public function render()
    {
        $appointment=Appointment::find($this->appointment_id);
        return view('livewire.doctor.doctor-online-appointment-detail-component',['appointment'=>$appointment])->layout('layouts.doctor.base');
    }
}
