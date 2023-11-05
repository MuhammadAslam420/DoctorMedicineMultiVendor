<?php

namespace App\Http\Livewire\Doctor;

use App\Models\SubscriptionPackage;
use Livewire\Component;
use Stripe;
use App\Models\Doctor;
use App\Models\DoctorTransaction;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class BuySubscriptionPackageComponent extends Component
{
    public $paymentmode;

    public $card_no;
    public $exp_month;
    public $exp_year;
    public $cvc;
    public $p_id;
    public function mount($id)
    {
        $this->p_id=$id;
    }
    public function checkout()
    {
        $package=SubscriptionPackage::find($this->p_id);
        $doctor=Doctor::where('user_id',Auth::user()->id)->first();
        $doctor->package_id=$package->id;
        $ex_date=Carbon::today()->addDays($package->days);
        $doctor->expire_date=$ex_date;
        $doctor->package_status=$package->name;
        $doctor->save();
        if ($this->paymentmode == 'card') {
            $this->validate([
                'card_no' => 'required|numeric',
                'exp_month' => 'required|numeric',
                'exp_year' => 'required|numeric',
                'cvc' => 'required|numeric',
            ]);

        $stripe = Stripe::make(env('STRIPE_KEY'));

        try {
            $token = $stripe->tokens()->create([
                'card' => [
                    'number' => $this->card_no,
                    'exp_month' => $this->exp_month,
                    'exp_year' => $this->exp_year,
                    'cvc' => $this->cvc
                ]
            ]);
            if (!isset($token['id'])) {
                session()->flash('message', 'Your Input card information is not correct please try later with valid card!');
                $this->thankyou = 0;
            }
            $customer = $stripe->customers()->create([
                'name' => Auth::user()->name,
                'email' => Auth::user()->email,
                'phone' => Auth::user()->mobile,
                'address' => [
                    'line1' => Auth::user()->profile->line1,
                    'postal_code' => Auth::user()->profile->zipcode,
                    'city' => Auth::user()->profile->city,
                    'state' => Auth::user()->profile->province,
                    'country' => Auth::user()->profile->country
                ],
                'shipping' => [
                    'name' => Auth::user()->name,
                    'address' => [
                        'line1' => Auth::user()->profile->line1,
                        'postal_code' => Auth::user()->profile->zipcode,
                        'city' => Auth::user()->profile->city,
                        'state' => Auth::user()->profile->province,
                        'country' => Auth::user()->profile->country
                    ],

                ],
                'source' => $token['id']
            ]);

            $charge = $stripe->charges()->create([
                'customer' => $customer['id'],
                'currency' => 'PKR',
                'amount' => session()->get('checkout')['total'],
                'description' => 'Payment for order number' . $package->id

            ]);
            if ($charge['status'] == 'succeeded') {
                $this->makeTransaction($package->id, 'approved');
                return redirect()->route('doctor.dashboard')->with('message', 'Success in transaction');
            } else {
                session()->flash('message', 'Error in transaction');
                    return redirect()->route('doctor.dashboard')->with('message', 'Error in transaction');
            }
        } catch (Exception $e) {
            session()->flash('message', $e->getMessage());
                return redirect()->route('doctor.dashboard');
        }
        }elseif($this->paymentmode === 'easypaisa')
        {
            $this->makeTransaction($package->id, 'easypaisa');
            return redirect()->route('doctor.dashboard')->with('message', 'Success in transaction');
        }elseif($this->paymentmode === 'jazzcash')
        {
            $this->makeTransaction($package->id, 'jazzcash');
            return redirect()->route('doctor.dashboard')->with('message', 'Success in transaction');
        }




    }
    public function makeTransaction($package_id, $status)
    {
        $transaction = new DoctorTransaction();
        $doctor = Doctor::where('user_id', Auth::user()->id)->first();
        $transaction->doctor_id =$doctor->id  ;
        $transaction->subscription_package_id = $package_id;
        $transaction->mode = $this->paymentmode;
        $transaction->status = $status;
        $package = SubscriptionPackage::find($this->p_id);
        $transaction->total = $package->price;
        $transaction->expire_date=Carbon::today()->addDays($package->days);
        $transaction->days=$package->days;
        $transaction->save();
    }
    public function render()
    {
        $package=SubscriptionPackage::find($this->p_id);
        return view('livewire.doctor.buy-subscription-package-component',['package'=>$package])->layout('layouts.doctor.base');
    }
}
