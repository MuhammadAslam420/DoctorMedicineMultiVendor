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

class BloggerEditBlogComponent extends Component
{
    use WithFileUploads;
   
    public $title;
    public $subtitle;
    public $blog;
    public $image;
    public $blog_id;
    public $newimage;
    public function mount($id)
    {
    
    $blog=Bloggger::where('id','=',$id)->first();
    $this->title=$blog->title;
    $this->subtitle=$blog->subtitle;
    $this->short_description=$blog->short_description;
    $this->blog=$blog->blog;
    $this->image=$blog->image;   
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
        ]);
        if($this->newimage)
        {
            $this->validateOnly($field,[
                'newimage'=>'required|mimes:jpeg,jpg,png' 

            ]); 
        }
     }
    public function updateblog()
    {
        $this->validate([
            'title'=>'required',
            'subtitle'=>'required|unique:blogggers',
            'blog'=>'required',
            ]);
            if($this->newimage)
    {
        $this->validate([
            'newimage'=>'required|mimes:jpeg,jpg,png'

        ]); 
    }
        $blog=Bloggger::find($this->id);
        $blog->title = $this->title;
        $blog->subtitle = $this->subtitle;
        $blog->blog=$this->blog;
        if($this->newimage)
        {
            unlink('images/blog'.'/'.$blog->image);
            $imagename=Carbon::now()->timestamp.'.'.$this->newimage->extension();
            $this->newimage->storeAs('images/blog',$imagename);
             $blog->image=$imagename;
        }    
        $blog->save();
        session()->flash('message','blog has been Edit successfully!');
    }
   

    public function render()
    {
        return view('livewire.blog.blogger-edit-blog-component')->layout('layouts.blog.base');
    }
}
