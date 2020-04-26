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

        for ($i = 0; $i < 15; $i++) {
            DB::table('tags')->insert([
                'name' => $faker->word,
                'status' => rand(1, 5),
                'created_at' => rand(1546319103, 1568910506),
            ]);
        }
    }
}
