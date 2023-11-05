<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\Subcategory;

class AdminAddCategoryComponent extends Component
{
    public $name;
    public $slug;
    public $category_id;

    public function generateslug()
    {
        $this->slug =Str::slug($this->name);
    }
   public function updateCategory($fields){
       $this->validateOnly($fields,[
        'name'=>'required',
        'slug'=>'required|unique:categories'
       ]);
   }
    public function storeCategory()
    {
        $this->validate([
            'name'=>'required',
            'slug'=>'required|unique:categories'
        ]);
        if($this->category_id)
        {
            $scategory=new Subcategory();
            $scategory->name=$this->name;
            $scategory->slug=$this->slug;
            $scategory->category_id=$this->category_id;
            $scategory->save();
        }
        else{
         $category=new Category();
         $category->name=$this->name;
         $category->slug=$this->slug;
         $category->save();
        }
         session()->flash('message','Category is added right now by you successfully!');
    
    }
    public function render()
    {
        $categories=Category::all();
        return view('livewire.admin.admin-add-category-component',['categories'=>$categories])->layout('layouts.admin.base');
    }
}
