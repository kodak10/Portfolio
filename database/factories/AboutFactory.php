<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AboutFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'textAbout' => $this->faker->realText(),
            'anneeExperience' =>$this->faker->numberBetween(1,3),
            'projetRealise' =>$this->faker->numberBetween(2,6),
            'photo' => $this->faker->imageUrl(),
        ];
    }
}
