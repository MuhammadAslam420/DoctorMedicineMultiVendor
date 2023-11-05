<?php

namespace App\Http\Livewire\Doctor;

use Livewire\Component;
use App\Models\Hospital;
use App\Models\Practice;
use App\Models\User;
use App\Models\Doctor;
use Auth;

class DoctorHospitalDetailComponent extends Component
{
    public function deleteProduct($id)
    {
        $product = Practice::find($id);
        $product->delete();
        session()->flash('message','successfully! deleted');
    }
    public function render()
    {
        $user=Doctor::where('user_id',Auth::user()->id)->first();
        $practices=Practice::where('doctor_id',$user->id)->get();
        return view('livewire.doctor.doctor-hospital-detail-component',['practices'=>$practices])->layout('layouts.doctor.base');
    }
}
