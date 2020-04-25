<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Generate comments.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 50; $i++) {
            DB::table('comments')->insert([
                'user_id' => rand(1, 20),
                'post_id' => rand(1, 10),
                'status' => rand(1, 10),
                'parent_id' => 0,
                'body' => $faker->sentence,
                'created_at' => rand(1546319103, 1568910506),
            ]);
        }
    }
}
