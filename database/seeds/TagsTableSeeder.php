<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * This method generate tags.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 200; $i++)
        {
            DB::table('tags')->insert([
                'post_id' => rand(1,20),
                'name' => $faker->word,
                'status' => rand(1,10),
                'created_at' => rand(1546319103,1568910506),
            ]);
        }
    }
}
