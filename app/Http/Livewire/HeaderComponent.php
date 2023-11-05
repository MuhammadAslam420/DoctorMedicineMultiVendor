<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Setting;
class HeaderComponent extends Component
{
    protected $listeners = ['refreshComponent'=>'$refresh'];
    public function render()
    {
        $setting=Setting::find(1);
        return view('livewire.header-component',['setting'=>$setting]);
    }
}
