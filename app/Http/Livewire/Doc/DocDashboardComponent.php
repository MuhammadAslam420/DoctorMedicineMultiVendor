<?php

namespace App\Http\Livewire\Doc;

use Livewire\Component;

class DocDashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.doc.doc-dashboard-component')->layout('layouts.base');
    }
}
