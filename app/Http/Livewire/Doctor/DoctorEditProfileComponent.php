<?php

namespace App\Http\Livewire\Doctor;

use Livewire\Component;
use App\Models\User;
use App\Models\Doctor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use App\Models\Hospital;
use App\Models\DoctorSpecialist;

class DoctorEditProfileComponent extends Component
{
    use WithFileUploads;
   
    public $firstname;
    public $slug;
    public $about_self;
    public $experience;
    public $degree;
    public $license_no;
    public $checkup_fees;
    public $discount;
    public $hospital_id;
    public $city;
    public $state;
    public $country;
    public $profileImage;
    public $newimage;
    public $degree_certificate;
    public $newimages;
    public $other_sertificate;
    public $newoimages;
    public $u_id;
    public $name;
    public $specialist=[];
    public function mount($user_id)
    {
        $doctor=Doctor::where('user_id',$user_id)->first();
        $this->firstname=$doctor->firstname;
        $this->slug=$doctor->slug;
        $this->about_self=$doctor->about_self;
        $this->experience=$doctor->experience;
        $this->degree=$doctor->degree;
        $this->license_no=$doctor->license_no;
        $this->checkup_fees=$doctor->checkup_fees;
        $this->discount=$doctor->discount;
        $this->hospital_id=$doctor->hospital_id;
        $this->city=$doctor->city;
        $this->state=$doctor->state;
        $this->country=$doctor->country;
        $this->profileImage=$doctor->profileImage;
        $this->specialist=explode(',',$doctor->specialist);;
        $this->degree_certificate=$doctor->degree_certificate;
        $this->other_sertificate=$doctor->other_sertificate;
        $this->u_id=$doctor->id;
        
        
    }
    public function generateslug()
    {
        $this->slug =Str::slug($this->firstname,'-');
    }
   
    public function updated($field)
    {
        $this->validateOnly($field,[
        'firstname'=>'required',
        'slug'=>'required|unique:doctors',

        'about_self'=>'required',
        'experience'=>'required',
        'degree'=>'required',
        'license_no'=>'required',
        'checkup_fees'=>'numeric',
        'hospital_id'=>'required',
        'city'=>'required',
        'state'=>'required',
        'country'=>'required',
        'specialist'=>'required',
        
        
    ]);
    if($this->newimage)
        {
            $this->validateOnly($field,[
                'newimage'=>'required|mimes:jpeg,jpg,png' 

            ]); 
        }
     }
    public function updateprofile()
    {
    $this->validate([
    'firstname'=>'required',
    'about_self'=>'required',
    'experience'=>'required',
    'degree'=>'required',
    'license_no'=>'required',
    'checkup_fees'=>'numeric',
    'hospital_id'=>'required',
    'city'=>'required',
    'state'=>'required',
    'country'=>'required',
    'specialist'=>'required',
    ]);
    if($this->newimage)
    {
        $this->validate([
            'newimage'=>'required|mimes:jpeg,jpg,png'

        ]); 
    }

    $doctor =Doctor::find($this->u_id);
    $doctor->firstname=$this->firstname;
    $doctor->slug=$this->slug;
    $doctor->about_self=$this->about_self;
    $doctor->experience=$this->experience;
    $doctor->degree=$this->degree;
    $doctor->license_no=$this->license_no;
    $doctor->checkup_fees=$this->checkup_fees;
    $doctor->discount=$this->discount;
    $doctor->hospital_id=$this->hospital_id;
    $doctor->city=$this->city;
    $doctor->state=$this->state;
    $doctor->country=$this->country;
    $doctor->specialist= implode(',', $this->specialist);
    if($this->newimage)
        {
          //  unlink('public/images/doctors'.'/'.$doctor->profileImage);
            $imagename=Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('images/doctors',$imagename);
             $doctor->profileImage=$imagename;
        }
        if($this->newimages)
        {
            if($doctor->degree_certificate)
           {
                $degree_certificate=explode(",",$doctor->degree_certificate);
                foreach($degree_certificate as $image)
                {
                    if($image)
                    {
                      //  unlink('images/doctors'.'/'.$image);
                    }

                }

           }
          $imagesname="";
          foreach($this->newimages as $key=>$image)
              {
            $imagename=Carbon::now()->timestamp.$key.'.'.$image->extension();
            $image->storeAs('images/doctors',$imagename);
            $imagesname=$imagesname.','.$imagename;
           }
           $doctor->degree_certificate= $imagesname;
        }
        if($this->newoimages)
        {
            if($doctor->other_sertificate)
           {
                $other_sertificate=explode(",",$doctor->other_sertificate);
                foreach($other_sertificate as $image)
                {
                    if($image)
                    {
                       // unlink('images/doctors'.'/'.$image);
                    }

                }

           }
          $imagesname="";
          foreach($this->newoimages as $key=>$image)
              {
            $imagename=Carbon::now()->timestamp.$key.'.'.$image->extension();
            $image->storeAs('images/doctors',$imagename);
            $imagesname=$imagesname.','.$imagename;
           }
           $doctor->other_sertificate= $imagesname;
        }
    $doctor->save();
    session()->flash('message','Profile has been added/Updated successfully!');

}
    public function render()
    {
        $hospitals=Hospital::all();
        $specials = DoctorSpecialist::all();
        return view('livewire.doctor.doctor-edit-profile-component',['hospitals'=>$hospitals,'specials'=>$specials])->layout('layouts.doctor.base');
    }
}
