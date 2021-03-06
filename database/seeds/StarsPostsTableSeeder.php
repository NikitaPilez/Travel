<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StarsPostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Generate stars_posts value.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 100; $i++) {
            DB::table('stars_posts')->insert([
                'post_id' => rand(1, 10),
                'user_id' => rand(1, 20),
                'created_at' => rand(1546319103, 1568910506),
            ]);
        }
    }
}
