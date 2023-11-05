<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class DoctorSpecialistFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name=$this->faker->unique()->words($nb=2,$asText=true);
        $slug=Str::slug($name);
        return [
            //
            'name'=>$name,
            'slug'=>$slug
        ];
    }
}
