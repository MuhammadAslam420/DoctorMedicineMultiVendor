<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\User;
use App\Models\Appointment;
use Illuminate\Support\Facades\DB;
use Auth;

class UserAppointmentDetailsComponent extends Component
{
    public $appointment_id;

    public function mount($appointment_id)
    {
        $this->appointment_id=$appointment_id;
    }
    public function cancelappointment()
    {
        $appointment=Appointment::find($this->appointment_id);
        $appointment->meeting_status="cancel";
        $appointment->canceled_date=DB::raw('CURRENT_DATE');
        $appointment->save();
        session()->flash('can_msg','appointment has been Canceled');
    }
    public function render()
    { 
        $appointment=Appointment::where('user_id',Auth::user()->id)->where('id',$this->appointment_id)->first();
        return view('livewire.user.user-appointment-details-component',['appointment'=>$appointment])->layout('layouts.base');
    }
}
