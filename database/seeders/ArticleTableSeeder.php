<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class ArticleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 1; $i < 11; $i++) {
            $article = [
                'tieude' => $faker->sentence(),
                'ten_bhat' => $faker->word(),
                'ma_tloai' => $faker->numberBetween(1, 10),
                'tomtat' => $faker->paragraph(),
                'noidung' => $faker->text(),
                'ma_tgia' => $faker->numberBetween(1, 10),
            ];
            Article::create($article);
        }
    }
}
