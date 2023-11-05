<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Pharmacist;

class AdminPharmacistDetailComponent extends Component
{
    public $pharmacist_id;
    public function mount($pharmacist_id)
    {
        $this->pharmacist_id=$pharmacist_id;
    }
    public function render()
    {
        $pharmacist=Pharmacist::find($this->pharmacist_id);
        return view('livewire.admin.admin-pharmacist-detail-component',['pharmacist'=>$pharmacist])->layout('layouts.admin.base');
    }
}
