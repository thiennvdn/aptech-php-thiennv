<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class ArticleCategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articleID = DB::table('articles')->pluck('id')->toArray();
        $categoryID = DB::table('categories')->pluck('id')->toArray();
        for ($i=0; $i < 20; $i++) {
            $articleIDRand = $articleID[array_rand($articleID)];
            $categoryIDRand = $categoryID[array_rand($categoryID)];
            $checkExists = DB::table('article_category')->where('article_id', $articleIDRand)->where('category_id', $categoryIDRand)->exists();
            if (!$checkExists) {
                DB::table('article_category')->insert([
                    'article_id' => $articleIDRand,
                    'category_id' => $categoryIDRand
                ]);
            }
        }
    }
}
