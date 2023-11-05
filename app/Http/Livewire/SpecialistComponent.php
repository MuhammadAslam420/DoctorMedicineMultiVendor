<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Doctor;
use Livewire\WithPagination;
use Cart;
use App\Models\DoctorSpecialist;
class SpecialistComponent extends Component
{
    use WithPagination;
    public $sorting;
    public $pagesize;
    public $min_price;
    public $max_price;
    public $doctor;
    public $city;
    public $special_slug;
    public function mount($slug)
    {
        $this->sorting='default';
        $this->pagesize=12;
        $this->min_price=1000;
        $this->max_price=5000;
        $this->special_slug=$slug;
    }
    public function store($doctor_id,$doctor_name,$doctor_price){
        Cart::instance('cart')->add($doctor_id,$doctor_name,1,$doctor_price)->associate('App\Models\Doctor');
        session()->flash('success_message','Book Your Appointment');
        return redirect()->route('doctor.appointment');
    }
    public function render()
    {
        if($this->special_slug)
        {
          $special=DoctorSpecialist::where('slug',$this->special_slug)->first();
          $special_id=$special->id;
        }
        if($this->sorting=='date'){
            $doctors=Doctor::where('firstname','like','%'.$this->doctor.'%')->where('city','like','%'.$this->city.'%')->where('specialist','like','%'.$special_id.'%')->whereBetween('checkup_fees',[$this->min_price,$this->max_price])->derBy('created_at','DESC')->paginate($this->pagesize);
        }
        elseif
        ($this->sorting=='price'){
            $doctors=Doctor::where('firstname','like','%'.$this->doctor.'%')->where('city','like','%'.$this->city.'%')->where('specialist','like','%'.$special_id.'%')->whereBetween('checkup_fees',[$this->min_price,$this->max_price])->derBy('checkup_fees','ASC')->paginate($this->pagesize);
        }
        elseif($this->sorting=='price-desc'){
            $doctors=Doctor::where('firstname','like','%'.$this->doctor.'%')->where('city','like','%'.$this->city.'%')->where('specialist','like','%'.$special_id.'%')->whereBetween('checkup_fees',[$this->min_price,$this->max_price])->derBy('checkup_fees','DESC')->paginate($this->pagesize);


        }
        else{
            $doctors=Doctor::where('firstname','like','%'.$this->doctor.'%')->where('city','like','%'.$this->city.'%')->where('specialist','like','%'.$special_id.'%')->whereBetween('checkup_fees',[$this->min_price,$this->max_price])->paginate($this->pagesize);

        }
        $related_doctors=Doctor::inRandomOrder()->limit(3)->get();
        $specialists=DoctorSpecialist::all();
        return view('livewire.specialist-component',['doctors'=>$doctors,'related_doctors'=>$related_doctors,'specialists'=>$specialists])->layout('layouts.base');
    }
}
