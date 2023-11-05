<?php

namespace App\Http\Livewire\Doctor;

use Livewire\Component;
use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class DoctorProfileComponent extends Component
{
    public function render()
    {
        $doctor=Doctor::where('user_id',Auth::user()->id)->first();
        if(!$doctor){
            $doctor=new Doctor();
            $doctor->user_id=Auth::user()->id;
            $doctor->save();
        
        }
        $user=User::find(Auth::user()->id);

        return view('livewire.doctor.doctor-profile-component',['user'=>$user])->layout('layouts.doctor.base');
    }
}
