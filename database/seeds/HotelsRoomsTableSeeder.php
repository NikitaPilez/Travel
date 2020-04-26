<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class HotelsRoomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        for ($i = 0; $i < 4; $i++) {
            DB::table('hotel_rooms')->insert([
                'hotel_id' => 1,
                'price' => rand(10, 100),
                'photo' => $faker->imageUrl($width = 1000, $height = 600),
                'title' => $faker->sentence(3, true),
                'status' => '1',
                'person_count' => rand(1, 7),
                'bed_count' => rand(1, 4),
                'room_count' => rand(1, 4),
                'bar' => rand(0, 1),
                'smoking' => rand(0, 1),
                'tv' => rand(0, 1),
                'created_at' => rand(1546319103, 1568910506),
            ]);
        }
    }
}
