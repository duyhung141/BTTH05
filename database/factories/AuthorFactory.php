<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'ten_tgia' => $this->faker->name,
            'hinh_tgia' => $this->faker->imageUrl(480,480)
        ];
    }
}
