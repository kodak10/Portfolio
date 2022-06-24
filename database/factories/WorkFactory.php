<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class WorkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'anneedebut'=> $this->faker->date(),
            'anneeFin' => $this->faker->date(),
            'description' => $this->faker->text(),
            'entreprise' => $this->faker->name(),
            'job' => $this->faker->jobTitle(),
        ];
    }
}
