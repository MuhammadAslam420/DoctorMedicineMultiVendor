<?php

namespace App\Http\Livewire\Deliverymanger;

use Livewire\Component;

class DeliverymangerDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.deliverymanger.deliverymanger-dashboard-component')->layout('layouts.base');
    }
}
