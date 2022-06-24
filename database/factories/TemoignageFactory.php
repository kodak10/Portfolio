<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TemoignageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'photo' => $this->faker->imageUrl(),
            'nom' => $this->faker->lastName(),
            'text' => $this->faker->realText(),
        ];
    }
}
