<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Supplier;
use Livewire\WithPagination;
use App\Models\User;

class AdminViewAllSupplierDetailComponent extends Component
{
    use WithPagination;
    public function updateAdminStatus($user_id,$status)
    {
        $supplier = Supplier::find($user_id);
        $supplier->admin_approval=$status;
        $supplier->save();
    session()->flash('admin_msg','Supplier Profile Acceptance has been successfully Change');
}
   
    public function render()
    {
        $users=User::where('utype','SUP')->paginate(12);
        return view('livewire.admin.admin-view-all-supplier-detail-component',['users'=>$users])->layout('layouts.admin.base');
    }
}
