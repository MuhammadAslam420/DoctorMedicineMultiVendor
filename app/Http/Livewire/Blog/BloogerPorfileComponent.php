<?php

namespace App\Http\Livewire\Blog;

use Livewire\Component;
use App\Models\User;
use App\Models\Blog;
use Auth;

class BloogerPorfileComponent extends Component
{
    public function render()
    {
        $profile=Blog::where('user_id',Auth::user()->id)->first();
        if(!$profile){
            $profile=new Blog();
            $profile->user_id=Auth::user()->id;
            $profile->save();
        
        }
        $user=User::find(Auth::user()->id);
        return view('livewire.blog.blooger-porfile-component',['user'=>$user])->layout('layouts.blog.base');
    }
}
