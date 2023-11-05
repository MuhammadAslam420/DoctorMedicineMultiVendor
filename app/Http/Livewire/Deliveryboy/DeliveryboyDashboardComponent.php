<?php

namespace App\Http\Livewire\Deliveryboy;

use Livewire\Component;

class DeliveryboyDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.deliveryboy.deliveryboy-dashboard-component')->layout('layouts.base');
    }
}
