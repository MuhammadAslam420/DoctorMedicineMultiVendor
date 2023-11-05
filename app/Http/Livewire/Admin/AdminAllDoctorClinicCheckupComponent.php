<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Transaction1;

class AdminAllDoctorClinicCheckupComponent extends Component
{
    public function render()
    {
        $transactions=Transaction1::where('mode', 'cod')->paginate(10);
        return view('livewire.admin.admin-all-doctor-clinic-checkup-component',['transactions'=>$transactions])->layout('layouts.admin.base');
    }
}
