<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsPostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * Generate tags_posts value in table.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 200; $i++) {
            DB::table('tags_posts')->insert([
                'tag_id' => rand(1, 30),
                'post_id' => rand(1, 20),
                'created_at' => rand(1546319103, 1568910506),
            ]);
        }
    }
}
