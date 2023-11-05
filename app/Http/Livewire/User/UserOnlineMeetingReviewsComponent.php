<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Onlinemeeting;
use App\Models\Appointmentreview;

class UserOnlineMeetingReviewsComponent extends Component
{ public $onlinemeeting_id;
    public  $rating;
    public  $behaviour;
    public  $waiting_time;
    public $comment;

    public function mount($onlinemeeting_id)
    {
        $this->onlinemeeting_id=$onlinemeeting_id;
    }
    public function updated($fields)
    {
        $this->validateOnly($fields,[
            'rating'=>'required',
            'behaviour'=>'required',
            'waiting_time'=>'required',
            'comment'=>'required',
        ]);
    }
     public function addReview()
     {
        $this->validate([
            'rating'=>'required',
            'behaviour'=>'required',
            'waiting_time'=>'required',
            'comment'=>'required',

        ]);
        $review=new AppointmentReview();
        $review->rating=$this->rating;
        $review->behaviour=$this->behaviour;
        $review->waiting_time=$this->waiting_time;
        $review->comment=$this->comment;
        $review->onlinemeeting_id=$this->onlinemeeting_id;
        $review->save();

        $online=Onlinemeeting::find($this->onlinemeeting_id);
        $online->rstatus=true;
        $online->save();
        session()->flash('re_msg','Review and Rating has been added successfully!');

     }
    public function render()
    {
        $online=Onlinemeeting::find($this->onlinemeeting_id);
        return view('livewire.user.user-online-meeting-reviews-component',['online'=>$online])->layout('layouts.base');
    }
}
