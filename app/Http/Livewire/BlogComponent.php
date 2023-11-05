<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Bloggger;

class BlogComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $blogs=Bloggger::paginate(10);
        return view('livewire.blog-component',['blogs'=>$blogs])->layout('layouts.base');
    }
}
