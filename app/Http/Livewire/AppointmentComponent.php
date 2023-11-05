<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\User;
use App\Models\Onlinemeeting;
use Illuminate\Support\Facades\Auth;
use MacsiDigital\Zoom\Facades\Zoom;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Cart;
use App\Models\Transaction1;
use Stripe;
use App\Models\Practice;
use Illuminate\Support\Facades\Mail;
use App\Mail\DispatchMail;
class AppointmentComponent extends Component
{

    use WithFileUploads;
    public $thankyou;
    public $checkup;
    public $firstname;
    public $lastname;
    public $email;
    public $mobile;
    public $problem;
    public $document;
    public $dob;
    public $gender;
    public $appointment_date;
    public $duration;
    public $paymentmode;
    public $online_consultation;
    public $line1;
    public $line2;
    public $city;
    public $province;
    public $country;
    public $zipcode;

    public $card_no;
    public $exp_month;
    public $exp_year;
    public $cvc;
    public $status;
   // public array $times=[];

     public function update($feilds)
    {
        $this->validateOnly($feilds,[
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email',
            'mobile'=>'required',
            'problem'=>'required',
            'dob'=>'required|date',
            'gender'=>'required',
            'line1'=>'required',
            'line2'=>'required',
            'city'=>'required',
            'province'=>'required',
            'country'=>'required',
            'zipcode'=>'required',
            'paymentmode'=>'required',


        ]);
        if($this->paymentmode == 'card')
        {
            $this->validateOnly($fields,[
                'card_no'=>'required|numeric',
                'exp_month'=>'required|numeric',
                'exp_year'=>'required|numeric',
                'cvc'=>'required|numeric',
            ]);
        }

    }
    public function bookAppointment()
    {
        $this->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|email',
            'mobile'=>'required',
            'problem'=>'required',
            'dob'=>'required|date',
            'gender'=>'required',
            'line1'=>'required',
            'line2'=>'required',
            'city'=>'required',
            'province'=>'required',
            'country'=>'required',
            'zipcode'=>'required',
            'paymentmode'=>'required',

        ]);
        if($this->paymentmode == 'card')
        {
            $this->validate([
                'card_no'=>'required|numeric',
                'exp_month'=>'required|numeric',
                'exp_year'=>'required|numeric',
                'cvc'=>'required|numeric',
            ]);
        }
        $appointment=new Appointment();
        $appointment->user_id=Auth::user()->id;
        $appointment->checkup_fees=Cart::instance('cart')->subtotal();
        $appointment->tax=Cart::instance('cart')->tax();
        $appointment->subtotal=Cart::instance('cart')->total();
        $appointment->firstname=$this->firstname;
        $appointment->lastname=$this->lastname;
        $appointment->email=$this->email;
        $appointment->mobile=$this->mobile;
        $appointment->problem=$this->problem;
        $appointment->dob=$this->dob;
        $appointment->gender=$this->gender;
       // $appointment->meeting_type='online';
         $appointment->line1=$this->line1;
         $appointment->line2=$this->line2;
         $appointment->city=$this->city;
         $appointment->province=$this->province;
         $appointment->country=$this->country;
         $appointment->zipcode=$this->zipcode;
        // dd($this->appointment_date);
         $appointment->appointment_datetime=$this->appointment_date;
         $appointment->app_time_slot=$this->duration;
         if($this->checkup){
         $appointment->meeting_type='physical';
         }
         else{
            $appointment->meeting_type='online';
         }
        if($this->document)
    {
        $imagesname='';
        foreach($this->document as $key=>$image)
        {
            $imgName =Carbon::now()->timestamp.$key.'.'.$image->extension();
            $image->storeAs('images/patients',$imgName);
            $imagesname =$imagesname .','.$imgName;

        }
        $appointment->document=$imagesname;
    }
        $appointment->save();
        if($this->online_consultation)
        {


        foreach(Cart::instance('cart')->content() as $item)
        {
            // $arr['topic']='Online Consultaion';
            // $arr['start_date']=$this->appointment_date;
            // $arr['duration']=$this->duration;
            // $arr['password']='online';
            // $arr['type']='2';
           $meeting= $this->createMeeting();
            $onlinemeeting=new Onlinemeeting();

            $onlinemeeting->doctor_id=$item->id;
            $onlinemeeting->users_id=Auth::user()->id;
            $onlinemeeting->appointment_id=$appointment->id;
            $onlinemeeting->meeting_id=$meeting->id;
            $onlinemeeting->topic=$meeting->topic;
            $onlinemeeting->start_at=$meeting->start_time;
            $onlinemeeting->duration=$meeting->duration;
            $onlinemeeting->password=$meeting->password;
            $onlinemeeting->start_url=$meeting->start_url;
            $onlinemeeting->join_url=$meeting->join_url;
            $onlinemeeting->save();
            $slot=Practice::where('doctor_id',$item->id)->where('timing',$this->duration)->first();
            $slot->booked='1';
            $slot->booking_date=$this->appointment_date;
            $slot->save();

        }
    }


        if($this->paymentmode == 'cod')
        {
            $this->makeTransaction($appointment->id,'physical');
            $this->resetcart();
        }
        else if($this->paymentmode == 'jazzcash')
        {
            $this->makeTransaction($appointment->id,'pending');
            $this->resetcart();
        }
        else if($this->paymentmode == 'easypaisa')
        {
            $this->makeTransaction($appointment->id,'pending');
            $this->resetcart();
        }
        else if($this->paymentmode  == 'card')
        {
            $stripe= Stripe::make(env('STRIPE_KEY'));

            try{
                $token = $stripe->tokens()->create([
                    'card'=>[
                        'number'=>$this->card_no,
                        'exp_month'=>$this->exp_month,
                        'exp_year'=>$this->exp_year,
                        'cvc'=>$this->cvc
                    ]
                    ]);
                    if(!isset($token['id']))
                    {
                        session()->flash('message','Your Input card information is not correct please try later with valid card!');
                        $this->thankyou=0;

                    }
                    $customer=$stripe->customers()->create([
                        'name'=>$this->firstname. '' .$this->lastname,
                        'email'=>$this->email,
                        'phone'=>$this->mobile,
                        'address'=>[
                            'line1'=>$this->line1,
                            'postal_code'=>$this->zipcode,
                            'city'=>$this->city,
                            'state'=>$this->province,
                            'country'=>$this->country
                        ],
                        'shipping'=>[
                           'name'=>$this->firstname. '' .$this->lastname,
                           'address'=>[
                               'line1'=>$this->line1,
                               'postal_code'=>$this->zipcode,
                               'city'=>$this->city,
                               'state'=>$this->province,
                               'country'=>$this->country
                           ],

                       ],
                       'source'=>$token['id']
                   ]);

                   $charge= $stripe->charges()->create([
                       'customer'=>$customer['id'],
                       'currency'=>'PKR',
                       'amount'=>Cart::instance('cart')->total(),
                       'description'=>'Payment for order number'.$appointment->id

                   ]);
                   if($charge['status']=='succeeded')
                   {
                       $this->makeTransaction($appointment->id,'approved');
                       $this->resetcart();
                   }
                   else{
                       session()->flash('message','Error in transaction');
                       $this->thankyou=0;
                   }
            }catch(Exception $e){
                session()->flash('message',$e->getMessage());
                $this->thankyou=0;
            }


           }


    }

    public function resetcart()
    {
        $this->thankyou = 1;
        Cart::instance('cart')->destroy();
       // session()->forget('checkout');
    }
    public function makeTransaction($appointment_id,$status)
    {
        $transaction = new Transaction1();
        $transaction->user_id=Auth::user()->id;
        $transaction->appointment_id=$appointment_id;
        $transaction->mode=$this->paymentmode;
        if($this->paymentmode=='jazzcash')
        {
        $transaction->status='pending';
        }
        else if($this->paymentmode=='easypaisa'){
        $transaction->status='pending';}
        else if($this->paymentmode=='card'){
        $transaction->status='approved';}
        $transaction->subtotal=Cart::instance('cart')->subtotal();
        $transaction->tax=Cart::instance('cart')->tax();
        $transaction->total=Cart::instance('cart')->total();
        $transaction->save();
      //  $this->orderConfirmationMail($appointment);
    }
    // public function appointmentConfirmationMail($appointment)
    // {
    //     Mail::to($appointment->email)->send(new OrderMail($appointment));

    //   }

    public function verifiyForCheckpout()
    {

            if(!Auth::check())
            {
            return redirect()->route('login');
        }
        else if($this-> thankyou)
        {
            return redirect()->route('thankyou');
        }

        else if(!session()->get('cart'))
        {
         return redirect()->route('contact-us');
        }

    }
    public function createMeeting(){
        $user = Zoom::user()->first();

        $meetingData = [
            'topic' => 'Online Consultation',
            'duration' =>10,
            'password' => 'online'.Auth::user()->id,
            'start_time' => $this->appointment_date,
            'timezone' => config('zoom.timezone')
          // 'timezone' => 'Africa/Cairo'
        ];
        $meeting = Zoom::meeting()->make($meetingData);

        $meeting->settings()->make([
            'join_before_host' => true,
            'host_video' => true,
            'participant_video' => false,
            'mute_upon_entry' => true,
            'waiting_room' => true,
            'approval_type' => config('zoom.approval_type'),
            'audio' => config('zoom.audio'),
            'auto_recording' => config('zoom.auto_recording')
        ]);

        return  $user->meetings()->save($meeting);


    }
    public function orderConfirmationMail($appointment)
{
    Mail::to($appointment->email)->send(new DispatchMail($appointment));

  }
    public function destroy($rowId)
    {
        Cart::instance('doctor')->remove($rowId);
        if(Cart::instance('doctor')->count() > 0)
        {
            return;
        }else
        {
            return redirect()->to("/doctors");
        }


        session()->flash('warning_msg', 'Product has been removed from Cart successfully');
    }
    public function render()
    {
        $this->verifiyForCheckpout();
        //dd($data);
        return view('livewire.appointment-component')->layout('layouts.base');
    }
}
