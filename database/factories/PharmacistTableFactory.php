<?php

namespace Database\Factories;
use App\Models\PharmacistTable;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class PharmacistTableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product_name=$this->faker->unique()->words($nb=2,$asText=true);
        $manufacture_name=$this->faker->unique()->words($nb=2,$asText=true);

        $slug=Str::slug($product_name);
        return [
            //
            'name'=>$product_name,
            'slug'=>$slug,
            'description'=>$this->faker->text(500),
            'price'=>$this->faker->numberBetween(1,100),
            'manufacture_name'=>$manufacture_name,
            'SKU'=>'MED'.$this->faker->unique()->numberBetween(1,10000),
            'quantity'=>$this->faker->numberBetween(10,100),
            'weight'=>$this->faker->numberBetween(10,1000),
            'pharmacist_id'=>2,
        ];
    }
}
