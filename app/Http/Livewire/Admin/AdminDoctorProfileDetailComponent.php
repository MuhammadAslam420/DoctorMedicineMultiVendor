<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Doctor;

class AdminDoctorProfileDetailComponent extends Component
{
    public $doctor_id;
    public function mount($doctor_id)
    {
        $doctor=Doctor::where('id',$doctor_id)->first();
    }
    public function updateDoctorStatus($doctor_id,$status)
    {
    $doctor = Doctor::find($doctor_id);
    $doctor->admin_approval=$status;
    $doctor->save();
    session()->flash('doctor_msg','Doctor Profile Status Has been Successfully Updated');
}
    public function render()
    {
        $doctor=Doctor::where('id',$this->doctor_id)->first();
        return view('livewire.admin.admin-doctor-profile-detail-component',['doctor'=>$doctor])->layout('layouts.admin.base');
    }
}
