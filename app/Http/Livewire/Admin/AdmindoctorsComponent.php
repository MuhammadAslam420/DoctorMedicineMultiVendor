<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Doctor;
use App\Models\Users;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class AdmindoctorsComponent extends Component
{
    use WithPagination;
    public function render()
    {
        
        $doctors=Doctor::paginate(10);
        return view('livewire.admin.admindoctors-component',['doctors'=>$doctors])->layout('layouts.admin.base');
    }
}
