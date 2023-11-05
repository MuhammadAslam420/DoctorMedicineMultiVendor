<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Bloggger;

class BlogDetailComponent extends Component
{
    public $blog_id;
    public function mount($blog_id)
    {
        $this->blog_id=$blog_id;
    }
    public function render()
    {
       $blog=Bloggger::find($this->blog_id);
       $blogs=Bloggger::inRandomOrder()->get()->take(8);
        return view('livewire.blog-detail-component',['blog'=>$blog,'blogs'=>$blogs])->layout('layouts.base');
    }
}
