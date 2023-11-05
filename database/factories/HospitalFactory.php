<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class HospitalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $hospital=$this->faker->unique()->words($nb=2,$asText=true);
        $slug=Str::slug($hospital);
        $city=$this->faker->unique()->words($nb=2,$asText=true);
        return [
            //
            'hospital'=>$hospital,
            'slug'=>$slug,
            'city'=>$city,
            'country'=>'Pakistan'
        ];
    }
}
