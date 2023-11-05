<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Models\Perscription;
use Cart;
use Carbon\Carbon;
use App\Mail\OrderMail;
use Stripe;
use Livewire\WithFileUploads;

class PerscriptionComponent extends Component
{
    use WithFileUploads;

    public $thankyou;
    public $firstname;
    public $lastname;
    public $email;
    public $mobile;
    public $line1;
    public $line2;
    public $city;
    public $province;
    public $country;
    public $zipcode;
    public $images;
    public $days;

  
    public function update($feilds)
    {
        $this->validateOnly($feilds,[
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email',
            'mobile'=>'required',
            'line1'=>'required',
            'city'=>'required',
            'province'=>'required',
            'country'=>'required',
            'zipcode'=>'required',
            'days'=>'required',
        ]);
    }
    public function uploadperscription()
    {
        $this->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email',
            'mobile'=>'required',
            'line1'=>'required',
            'city'=>'required',
            'province'=>'required',
            'country'=>'required',
            'zipcode'=>'required',
            'days'=>'required',

        ]);
        $upload=new Perscription();
        $upload->user_id=Auth::user()->id;
        $upload->firstname=$this->firstname;
        $upload->lastname=$this->lastname;
        $upload->email=$this->email;
        $upload->mobile=$this->mobile;
        $upload->line1=$this->line1;
        $upload->line2=$this->line2;
        $upload->city=$this->city;
        $upload->province=$this->province;
        $upload->country=$this->country;
        $upload->zipcode=$this->zipcode;
        $upload->NOD=$this->days;
        $upload->status='upload';
        if($this->images)
        {
            $imagesname='';
            foreach($this->images as $key=>$image)
            {
                $imgName =Carbon::now()->timestamp.$key.'.'.$image->extension();
                $image->storeAs('images/perscription',$imgName);
                $imagesname =$imagesname .','.$imgName;

            }
            $upload->images=$imagesname;
        }

        $upload->save();
        $this->thankyou = 1;
       
    }
   
    // public function orderConfirmationMail($order)
    // {
    //     Mail::to($order->email)->send(new OrderMail($order));
  
    //   }

    public function verifiyForCheckpout()
    {
        
            if(!Auth::check())
            {
            return redirect()->route('login');
        }
        else if($this->thankyou)
        {
            return redirect()->route('thankyou');
        }
       
      
       
    }
    public function render()
    {
        $this->verifiyForCheckpout();
        return view('livewire.perscription-component')->layout('layouts.base');
    }
}
