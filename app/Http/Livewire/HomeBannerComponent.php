<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\HomeSlider;
class HomeBannerComponent extends Component
{
    public function render()
    {
        $banners=HomeSlider::where('status',1)->get();
        return view('livewire.home-banner-component',['banners'=>$banners]);
    }
}
