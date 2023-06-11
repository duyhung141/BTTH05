<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Author;
use App\Models\Category;
use Database\Factories\AuthorFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
//            CategoryTableSeeder::class,
//        AuthorTableSeeder::class
//        ArticleTableSeeder::class

        ]);
//        Author::factory(10)->create();
//        Category::factory(10)->create();
        Article::factory(10)->create();

    }
}
