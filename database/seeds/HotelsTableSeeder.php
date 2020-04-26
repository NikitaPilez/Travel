<?php

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class HotelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('hotels')->insert([
            'name' => 'Marina Bay Sands',
            'header' => 'DISCOVER MARINA BAY SANDS',
            'photo' => '',
            'address' => $faker->address,
            'city' => 'Marina Bay',
            'country' => 'Singapore',
            'phone' => $faker->phoneNumber,
            'website' => 'https://www.marinabaysands.com/',
            'created_at' => rand(1546319103, 1568910506),
        ]);
    }
}
