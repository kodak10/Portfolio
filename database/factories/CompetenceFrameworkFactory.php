<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CompetenceFrameworkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "libCompetenceFramework" => $this->faker->realTextBetween(10),
            'competences_id' => rand(1,4),           
        ];
    }
}
