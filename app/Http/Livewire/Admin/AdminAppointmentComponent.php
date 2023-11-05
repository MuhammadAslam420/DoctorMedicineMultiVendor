<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\withPagination;
use App\Models\Appointment;

class AdminAppointmentComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $appointments= Appointment::orderBy('created_at','DESC')->paginate(10);
        return view('livewire.admin.admin-appointment-component',['appointments'=>$appointments])->layout('layouts.admin.base');
    }
}
