<?php

namespace Database\Factories;

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
        return [
            'name' => substr($this->faker->sentence(3,false),0,-1),
            'intro_description' => $this->faker->sentence(10),
            'full_description' => $this->faker->text,
            'price' => $this->faker->randomFloat(2,5,100),
            'category_id' => $this->faker->numberBetween(1,5)
        ];
    }
}
