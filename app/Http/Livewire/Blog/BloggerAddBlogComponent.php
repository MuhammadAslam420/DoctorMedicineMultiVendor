<?php

namespace App\Http\Livewire\Blog;

use Livewire\Component;
use App\Models\User;
use Auth;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use App\Models\Bloggger;
use App\Models\Blog;

class BloggerAddBlogComponent extends Component
{
    use WithFileUploads;
   
    public $title;
    public $subtitle;
    public $blog;
    public $image;
    public $blog_id;

    public function mount()
    {
        $blogger=Blog::where('user_id',Auth::user()->id)->first();
        $this->blog_id=$blogger->id;
    }
    public function generateslug()
    {
        $this->subtitle =Str::slug($this->title,'-');
    }
   
    public function updated($field)
    {
        $this->validateOnly($field,[
        'title'=>'required',
        'subtitle'=>'required|unique:blogggers',
        'blog'=>'required',
        'image'=>'required|mimes:jpeg,jpg,png', 
    ]);
     }
    public function addblog()
    {
    $this->validate([
        'title'=>'required',
        'subtitle'=>'required|unique:blogggers',
        'blog'=>'required',
        'image'=>'required|mimes:jpeg,jpg,png', 

    ]);

    $blog =  new Bloggger();
    $blogger=Blog::where('user_id',Auth::user()->id)->first();
    $blog->blog_id=$blogger->id;
  
    $imageName =Carbon::now()->timestamp.'.'.$this->image->extension();
    $this->image->storeAs('images/blog',$imageName);
    $blog->image=$imageName;
    $blog->title=$this->title;
    $blog->subtitle=$this->subtitle;
    $blog->blog=$this->blog;
   
    $blog->save();
    session()->flash('message','Product has been added successfully!');

}
    public function render()
    {
        return view('livewire.blog.blogger-add-blog-component')->layout('layouts.blog.base');
    }
}
