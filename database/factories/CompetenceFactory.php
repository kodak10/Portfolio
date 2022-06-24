<?php

namespace Database\Factories;

use App\Models\Competence;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompetenceFactory extends Factory
{

    protected $model = Competence::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" => $this->faker->randomElement(['Developpement Web', 'Developpement Mobile', 'Design', 'Autres']),
        ];
    }
}
