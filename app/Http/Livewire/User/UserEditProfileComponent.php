<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use App\Models\User;

class UserEditProfileComponent extends Component
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
         $this->mobile=$user->mobile;
         $this->image=$user->profile->image;
         $this->line1=$user->profile->line1;
         $this->line2=$user->profile->line2;
         $this->city=$user->profile->city;
         $this->province=$user->profile->province;
         $this->country=$user->profile->country;
         $this->zipcode=$user->profile->zipcode;
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
            $this->newimage->storeAs('users',$imagename);
            $user->profile->image=$imagename;
        }
        $user->profile->line1=$this->line1;
        $user->profile->line2=$this->line2;
        $user->profile->city=$this->city;
        $user->profile->province=$this->province;
        $user->profile->country=$this->country;
        $user->profile->zipcode=$this->zipcode;
        $user->profile->save();
        session()->flash('message','Profile has been updated successfully');
    }
    public function render()
    {
        return view('livewire.user.user-edit-profile-component')->layout('layouts.base');
    }
}
