<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;
use App\Models\Pharmacist;

class AdminPharmacistListComponent extends Component
{
    use WithPagination;
    public function updateProfileStatus($user_id,$status)
    {
        $pharmacist=Pharmacist::where('user_id',$user_id)->first();
        $pharmacist->admin_approval=$status;
        $pharmacist->save();
        session()->flash('profile_msg','Pharmacist Profile Status Has Been Updated Successfully');
    }
    public function render()
    {
        $users=User::where('utype','=','PHR')->paginate(10);
        return view('livewire.admin.admin-pharmacist-list-component',['users'=>$users])->layout('layouts.admin.base');
    }
}
