<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $a = ['News','Sport','Food','Travel','Music'];
        for ($i=0; $i < count($a); $i++) {
            DB::table('categories')->insert([
                'name' => $a[$i],
                'slug' => $faker->slug
            ]);
        }
    }
}
