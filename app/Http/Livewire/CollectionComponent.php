<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class CollectionComponent extends Component
{
    public function render()
    {
        $categories=Category::limit(4)->orderBy('id','asc')->get();
        return view('livewire.collection-component',['categories'=>$categories]);
    }
}
