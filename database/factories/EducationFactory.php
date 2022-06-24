<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class EducationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'anneeDebut' => $this->faker->date(),
            'anneeFin' => $this->faker->date(),
            'description' => $this->faker->realText(),
        ];
    }
}
