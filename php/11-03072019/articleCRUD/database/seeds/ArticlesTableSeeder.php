<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i=0; $i < 20; $i++) {
            DB::table('articles')->insert([
                'title' => $faker->word,
                'slug' => $faker->slug,
                'description' => $faker->sentence,
                'content' => $faker->paragraph
            ]);
        }
    }
}
