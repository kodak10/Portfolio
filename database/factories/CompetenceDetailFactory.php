<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompetenceDetailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'lib' => $this->faker->realTextBetween(10),
            'competences_id' => rand(1,4),
            'pourcentage' => rand(45,90),   
        ];
    }
}
