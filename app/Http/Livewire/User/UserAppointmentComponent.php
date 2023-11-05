<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Models\Onlinemeeting;
use Livewire\WithPagination;
use App\Models\Appoinment;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserAppointmentComponent extends Component
{
    public function render()
    {
        $onlines=Onlinemeeting::where('users_id','=',Auth::user()->id)->orderBy('created_at','DESC')->paginate(10);
        return view('livewire.user.user-appointment-component',['onlines'=>$onlines])->layout('layouts.base');
    }
}
