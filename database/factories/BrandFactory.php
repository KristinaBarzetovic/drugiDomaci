<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->catchPhrase,
            'legal_name' => $this->faker->word,
            'email' => $this->faker->safeEmail,
            'address' => $this->faker->address
        ];
    }
}
