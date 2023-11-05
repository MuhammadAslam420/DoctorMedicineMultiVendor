<?php

namespace App\Http\Livewire\Supplier;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use App\Models\Supplier;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use App\Models\User;

class SupplierEditProfileComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $email;
    public $mobile;
    public $image;
    public $company_address;
    public $company_name;
    public $city;
    public $province;
    public $country;
    public $zipcode;
    public $registration_no;
    public $newimage;
    public function mount()
    {
        $user=User::find(Auth::user()->id);
         $this->name=$user->name;
         $this->email=$user->email;
         $this->mobile=$user->phone;
         $this->image=$user->supplier->image;
         $this->company_name=$user->supplier->company_name;
         $this->company_address=$user->supplier->company_address;
         $this->registration_no=$user->supplier->registration_no;
         $this->city=$user->supplier->city;
         $this->province=$user->supplier->province;
         $this->country=$user->supplier->country;
         $this->zipcode=$user->supplier->zipcode;
    }
    public function updatesupplier()
    {
        $user=User::find(Auth::user()->id);
        $user->name=$this->name;
        $user->phone=$this->mobile;
        $user->save();
        if($this->newimage)
        {
            if($this->image)
            {
                unlink("images/supplier/".$this->image);
            }
            $imagename=Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('images/supplier',$imagename);
            $user->supplier->image=$imagename;
        }
        $user->supplier->company_name=$this->company_name;
        $user->supplier->company_address=$this->company_address;
        $user->supplier->registration_no=$this->registration_no;
        $user->supplier->city=$this->city;
        $user->supplier->province=$this->province;
        $user->supplier->country=$this->country;
        $user->supplier->zipcode=$this->zipcode;
        $user->supplier->save();
        session()->flash('message','supplier has been updated successfully');
    }
    public function render()
    {
        return view('livewire.supplier.supplier-edit-profile-component')->layout('layouts.supplier.base');
    }
}
