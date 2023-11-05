<?php

namespace App\Http\Livewire\Blog;

use Livewire\Component;
use Auth;
use App\Models\Blog;
use App\Models\Bloggger;
use Livewire\withPagination;

class BloggerDashboardComponent extends Component
{
    use WithPagination;
    public function render()
    {
        $user=Blog::where('user_id',Auth::user()->id)->first();
        $blogs=Bloggger::where('blog_id','=',$user->id)->paginate(8);
        return view('livewire.blog.blogger-dashboard-component',['blogs'=>$blogs])->layout('layouts.blog.base');
    }
}
