<?php

namespace App\Http\Livewire\Phr;

use Livewire\Component;

class PhrDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.phr.phr-dashboard-component')->layout('layouts.base');
    }
}
