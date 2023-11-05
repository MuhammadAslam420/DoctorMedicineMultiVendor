<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Perscription;
use App\Models\Pharmacist;
use App\Models\PharmacistTable;

class AdminPerscriptionComponent extends Component
{
    use WithPagination;
    public function updatePharmacistStatus($perscription_id,$pharmacist_id,$status)
    {
    $order = Perscription::find($perscription_id);
    $order->pharmacist_id=$pharmacist_id;
    $order->status=$status;
    $order->save();
    session()->flash('order_msg','Order Status has been Updated');
}
public function updatePerscriptionStatus($perscription_id,$status)
{
$order = Perscription::find($perscription_id);
$order->status=$status;
$order->save();
session()->flash('order_msg','Order Status has been Updated');
}
    public function render()
    {
        $uploads=Perscription::paginate(10);
        $pharmacists=Pharmacist::all();
        return view('livewire.admin.admin-perscription-component',['uploads'=>$uploads,'pharmacists'=>$pharmacists])->layout('layouts.admin.base');
    }
}
