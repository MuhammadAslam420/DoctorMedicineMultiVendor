<?php

namespace App\Http\Livewire\Deliverymanager;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Manager;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use App\Models\User;

class DeliveryManagerEditProfileComponent extends Component
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
         $this->image=$user->manager->image;
         $this->line1=$user->manager->line1;
         $this->line2=$user->manager->line2;
         $this->city=$user->manager->city;
         $this->province=$user->manager->province;
         $this->country=$user->manager->country;
         $this->zipcode=$user->manager->zipcode;
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
            $user->manager->image=$imagename;
        }
        $user->manager->line1=$this->line1;
        $user->manager->line2=$this->line2;
        $user->manager->city=$this->city;
        $user->manager->province=$this->province;
        $user->manager->country=$this->country;
        $user->manager->zipcode=$this->zipcode;
        $user->manager->save();
        session()->flash('message','Profile has been updated successfully');
    }
    public function render()
    {
        return view('livewire.deliverymanager.delivery-manager-edit-profile-component')->layout('layouts.deliverymanager.base');
    }
}
