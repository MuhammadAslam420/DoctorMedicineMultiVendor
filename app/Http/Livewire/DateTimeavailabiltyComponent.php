<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Practice;
class DateTimeavailabiltyComponent extends Component
{
    public $appointment_date;
    public array $times=[];
    public function render()
    {
        if($this->appointment_date)
        {
            foreach(Cart::instance('cart')->content() as $item)
          {
            $times=Practice::where('doctor-id',$item->id)->get();
            dd($times);
          }
        }
        else
        {
            $times=Practice::all();
        }
        return view('livewire.date-timeavailabilty-component',['times'=>$times]);
    }
}
