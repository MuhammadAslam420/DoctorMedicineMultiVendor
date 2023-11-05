<?php

namespace App\Http\Livewire\Doctor;

use Livewire\Component;
use App\Models\Hospital;
use App\models\User;
use App\Models\Practice;
use App\Models\Doctor;
use Auth;

class DoctorAddTimingComponent extends Component
{
    public $hours;
    public $days;
    public $hospital_id;
    public function storeHospital()
    {
        $this->validate([
            'hours'=>'required',
            'days'=>'required',
            'hospital_id'=>'required'
        ]);
      
            $add=new Practice();
            $user=Doctor::where('user_id',Auth::user()->id)->first();
            $add->doctor_id=$user->id;
            $add->hospital_id=$this->hospital_id;
            $add->timing=$this->hours;
            $add->days=$this->days;
            $add->save();
        
         session()->flash('message','Hours and days added successfully!');
    
    }
    public function render()
    {
        $hospitals=Hospital::all();
        return view('livewire.doctor.doctor-add-timing-component',['hospitals'=>$hospitals])->layout('layouts.doctor.base');
    }
}
