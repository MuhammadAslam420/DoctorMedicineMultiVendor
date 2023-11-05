<?php

namespace App\Http\Livewire\Pharmacist;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Pharmacist;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use App\Models\User;

class PharmacistEditProfileComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $email;
    public $mobile;
    public $image;
    public $pharmacy_address;
    public $pharmacy_name;
    public $city;
    public $province;
    public $country;
    public $zipcode;
    public $registration_no;
    public $newimage;
    public $map;
    public function mount()
    {
        $user=User::find(Auth::user()->id);
         $this->name=$user->name;
         $this->email=$user->email;
         $this->mobile=$user->phone;
         $this->image=$user->pharmacist->image;
         $this->pharmacy_name=$user->pharmacist->pharmacy_name;
         $this->pharmacy_address=$user->pharmacist->pharmacy_address;
         $this->registration_no=$user->pharmacist->registration_no;
         $this->city=$user->pharmacist->city;
         $this->province=$user->pharmacist->province;
         $this->country=$user->pharmacist->country;
         $this->zipcode=$user->pharmacist->zipcode;
         $this->map=$user->pharmacist->map;
    }
    public function updatepharmacist()
    {
        $user=User::find(Auth::user()->id);
        $user->name=$this->name;
        $user->phone=$this->mobile;
        $user->save();
        if($this->newimage)
        {
            if($this->image)
            {
                unlink("images/pharmacist/".$this->image);
            }
            $imagename=Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('images/pharmacist',$imagename);
            $user->pharmacist->image=$imagename;
        }
        $user->pharmacist->pharmacy_name=$this->pharmacy_name;
        $user->pharmacist->pharmacy_address=$this->pharmacy_address;
        $user->pharmacist->registration_no=$this->registration_no;
        $user->pharmacist->city=$this->city;
        $user->pharmacist->province=$this->province;
        $user->pharmacist->country=$this->country;
        $user->pharmacist->zipcode=$this->zipcode;
        $user->pharmacist->map=$this->map;
        $user->pharmacist->save();
        session()->flash('message','pharmacist has been updated successfully');
    }
    public function render()
    {
        return view('livewire.pharmacist.pharmacist-edit-profile-component')->layout('layouts.pharmacist.base');
    }
}
