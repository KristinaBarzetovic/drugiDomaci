<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClotheFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->catchPhrase,
            'color' => $this->faker->colorName,
            'url' => $this->faker->imageUrl,
            'description' => $this->faker->realText,
            'brand_id' => $this->faker->numberBetween(1, 10),
            'clothe_category_id' => $this->faker->numberBetween(1, 5)
        ];
    }
}
