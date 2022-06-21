<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class BannerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'job' => $this->faker->jobTitle(),
            'paragraphe' => $this->faker->text(200),
            'photo' => $this->faker->imageUrl(),
        ];
    }
}
