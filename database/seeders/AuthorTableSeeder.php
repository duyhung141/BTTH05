<?php

namespace Database\Seeders;

use App\Models\Author;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class AuthorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        for ($i = 0; $i < 10; $i++) {
            Author::create([
                'ten_tgia' => $faker->sentence(3, true),
            ]);
        }
    }
}
