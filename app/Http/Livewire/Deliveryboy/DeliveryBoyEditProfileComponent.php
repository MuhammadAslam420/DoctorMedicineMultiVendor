<?php

namespace App\Http\Livewire\Deliveryboy;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\DeliveryBoy;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use App\Models\User;

class DeliveryBoyEditProfileComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $email;
    public $mobile;
    public $image;
    public $line1;
    public $line2;
    public $city;
    public $province;
    public $country;
    public $zipcode;
    public $newimage;
    public function mount()
    {
        $user=User::find(Auth::user()->id);
         $this->name=$user->name;
         $this->email=$user->email;
         $this->mobile=$user->phone;
         $this->image=$user->deliveryboy->image;
         $this->line1=$user->deliveryboy->line1;
         $this->line2=$user->deliveryboy->line2;
         $this->city=$user->deliveryboy->city;
         $this->province=$user->deliveryboy->province;
         $this->country=$user->deliveryboy->country;
         $this->zipcode=$user->deliveryboy->zipcode;
    }
    public function updateProfile()
    {
        $user=User::find(Auth::user()->id);
        $user->name=$this->name;
        $user->phone=$this->mobile;
        $user->save();
        if($this->newimage)
        {
            if($this->image)
            {
                unlink("images/users/".$this->image);
            }
            $imagename=Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('images/users',$imagename);
            $user->deliveryboy->image=$imagename;
        }
        $user->deliveryboy->line1=$this->line1;
        $user->deliveryboy->line2=$this->line2;
        $user->deliveryboy->city=$this->city;
        $user->deliveryboy->province=$this->province;
        $user->deliveryboy->country=$this->country;
        $user->deliveryboy->zipcode=$this->zipcode;
        $user->deliveryboy->save();
        session()->flash('message','Profile has been updated successfully');
    }
    public function render()
    {
        return view('livewire.deliveryboy.delivery-boy-edit-profile-component')->layout('layouts.deliveryboy.base');
    }
}
