<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Doctor;
use Illuminat\Support\Facades\Auth;
use Cart;

class DoctorDetailsComponent extends Component
{
    public $slug;
    public $qty;
    public function mount($slug)
    {
        $this->slug=$slug;
        $this->qty=1;

    }
    public function store($doctor_id,$doctor_name,$doctor_price){
        Cart::instance('doctor')->add($doctor_id,$doctor_name,1,$doctor_price)->associate('App\Models\Doctor');
        session()->flash('success_message','Book Your Appointment');
        return redirect()->route('doctor.appointment');
    }
    public function render()
    {
        $doctor=Doctor::where('slug', $this->slug)->first();
        $related_doctors=Doctor::inRandomOrder()->limit(3)->get();
        return view('livewire.doctor-details-component',['doctor'=>$doctor,'related_doctors'=>$related_doctors])->layout('layouts.base');
    }
}
