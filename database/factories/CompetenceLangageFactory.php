<?php

namespace Database\Factories;

use App\Models\CompetenceLangage;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompetenceLangageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
         return [
            "libCompetenceLangage" => $this->faker->languageCode(),
            'competences_id' => rand(1,4),
            'pourcentage' => rand(45,90),
    
        ];
         
    }
}
