<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'image' => 'https:picsum.photos/id/'.$this->faker->numberBetween(1,1000).'/250/250',
            'product_id' => $this->faker->numberBetween(1,500)
        ];
    }
}
