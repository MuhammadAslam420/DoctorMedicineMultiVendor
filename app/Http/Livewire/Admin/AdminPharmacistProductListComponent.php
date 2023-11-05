<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\PharmacistTable;
use Livewire\WithPAgination;

class AdminPharmacistProductListComponent extends Component
{
    use WithPagination;
    public $pharmacist_id;
    public function mount($pharmacist_id)
    {
        $this->pharmacist_id=$pharmacist_id;
    }
    public function render()
    {
        $prods=PharmacistTable::where('pharmacist_id',$this->pharmacist_id)->paginate(20);
        return view('livewire.admin.admin-pharmacist-product-list-component',['prods'=>$prods])->layout('layouts.admin.base');
    }
}
