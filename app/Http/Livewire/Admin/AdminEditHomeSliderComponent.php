<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\HomeSlider;
use carbon\Carbon;
use Livewire\WithFileUploads;

class AdminEditHomeSliderComponent extends Component
{
    use WithFileUploads;
    public $title;
    public $subtitle;
    public $price;
    public $link;
    public $image;
    public $status;
    public $newimage;
    public $slider_id;

    public function mount($slider_id)
    {
        $slider=HomeSlider::find($slider_id);
        $this->title=$slider->title;
        $this->subtitle=$slider->subtitle;
        $this->price=$slider->price;
        $this->link=$slider->link;
        $this->image=$slider->image;
        $this->status=$slider->status;
        // $this->newimage=$slider->title;
        $this->slider_id=$slider->id;
    }
public function updateSlide()
{
    $slider=HomeSlider::find($this->slider_id);
        $this->title=$slider->title;
        $slider->subtitle=$this->subtitle;
        $slider->price=$this->price;
        $slider->link=$this->link;
        if($this->newimage)
        {
         $imagename=Carbon::now()->timestamp.'.'.$this->newimage->extension();
         $this->newimage->storeAs('images/slider',$imagename);
          $slider->image=$imagename;
        }
        $slider->status=$this->status;
        $slider->save();
    session()->flash('message','Slider is successfully Edit!');


}

    public function render()
    {
        return view('livewire.admin.admin-edit-home-slider-component')->layout('layouts.admin.base');
    }
}
