<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * This method generate category.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++)
        {
            DB::table('category')->insert([
                'name' => $faker->word,
                'description' => $faker->sentence,
                'created_at' => rand(1546319103,1568910506),
            ]);
        }
    }
}
