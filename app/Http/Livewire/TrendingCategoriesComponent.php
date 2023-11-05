<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Category;

class TrendingCategoriesComponent extends Component
{
    public function render()
    {
        $categories=Category::inRandomOrder()->limit(5)->get();
        $endCategories=Category::inRandomOrder()->limit(5)->get();
        return view('livewire.trending-categories-component',['categories'=>$categories,'endCategories'=>$endCategories]);
    }
}
