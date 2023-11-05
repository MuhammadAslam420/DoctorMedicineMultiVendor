<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Bloggger;

class BlogggerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $blog_title=$this->faker->unique()->words($nb=2,$asText=true);
        $subtitle=Str::slug($blog_title);
        return [
            'blog_id'=>15,
            'image'=>$this->faker->unique()->numberBetween(1,5).'.jpg',
            'title'=>$blog_title,
            'subtitle'=>$subtitle,
            'blog'=>$this->faker->text(1000),
            
            
        ];
    }
}
