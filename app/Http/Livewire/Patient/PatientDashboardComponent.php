<?php

namespace App\Http\Livewire\Patient;

use Livewire\Component;

class PatientDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.patient.patient-dashboard-component')->layout('layouts.base');
    }
}
