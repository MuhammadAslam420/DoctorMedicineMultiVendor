<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Transaction1;

class AdminAllOnlineMEetingComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $transactions=Transaction1::where('mode', 'card')->paginate(10);
        return view('livewire.admin.admin-all-online-m-eeting-component',['transactions'=>$transactions])->layout('layouts.admin.base');
    }
}
