<?php

namespace Database\Factories;
use App\Models\Product;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $product_name=$this->faker->unique()->words($nb=2,$asText=true);
        $slug=Str::slug($product_name);
        return [
            //
            'name'=>$product_name,
            'slug'=>$slug,
            'short_description'=>$this->faker->text(200),
            'description'=>$this->faker->text(500),
            'regular_price'=>$this->faker->numberBetween(100,100),
            'SKU'=>'MED'.$this->faker->unique()->numberBetween(1,10000),
            'stock_status'=> 'instock' ,
            'quantity'=>$this->faker->numberBetween(10,100),
            'image'=>'product'.$this->faker->unique()->numberBetween(1,21).'.png',
            'user_id'=>$this->faker->numberBetween(1,4),
            'category_id'=>$this->faker->numberBetween(1,5)
        ];
        }
}
