<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "tieude" => $this->faker->sentence(2, true),
            "ten_bhat" => $this->faker->word,
            "ma_tloai" => $this->faker->numberBetween(1, 10),
            "tomtat" => $this->faker->text,
            "noidung" => $this->faker->text,
            "ma_tgia" => $this->faker->numberBetween(1, 10),
            "hinhanh" => $this->faker->imageUrl(480, 480),
        ];
    }
}
