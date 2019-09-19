<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * This method generate posts.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 20; $i++)
        {
            DB::table('posts')->insert([
                'user_id' => rand(1, 50),
                'category_id' => rand(1, 10),
                'status' => rand(1, 10),
                'header' => $faker->sentence,
                'body' => file_get_contents('https://loripsum.net/api/7/medium/decorated/link/ul/dl/ol/bq/headers/prude'),
                'isPopular' => rand(0,1),
                'created_at' => rand(1546319103,1568910506),
            ]);
        }
    }
}
