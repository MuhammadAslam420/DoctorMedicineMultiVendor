<?php

namespace App\Http\Livewire\Blog;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Blog;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use App\Models\User;

class BloggerEditProfileComponent extends Component
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
         $this->image=$user->blog->image;
         $this->line1=$user->blog->line1;
         $this->line2=$user->blog->line2;
         $this->city=$user->blog->city;
         $this->province=$user->blog->province;
         $this->country=$user->blog->country;
         $this->zipcode=$user->blog->zipcode;
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
            $user->blog->image=$imagename;
        }
        $user->blog->line1=$this->line1;
        $user->blog->line2=$this->line2;
        $user->blog->city=$this->city;
        $user->blog->province=$this->province;
        $user->blog->country=$this->country;
        $user->blog->zipcode=$this->zipcode;
        $user->blog->save();
        session()->flash('message','Profile has been updated successfully');
    }
    public function render()
    {
        return view('livewire.blog.blogger-edit-profile-component')->layout('layouts.blog.base');
    }
}
