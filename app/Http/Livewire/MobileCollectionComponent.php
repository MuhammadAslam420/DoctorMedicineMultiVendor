<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class MobileCollectionComponent extends Component
{
    public function render()
    {
        $categories=Category::inRandomOrder()->limit(10)->orderBy('id','desc')->get();
        return view('livewire.mobile-collection-component',['categories'=>$categories]);
    }
}
