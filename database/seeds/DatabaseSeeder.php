<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(TagsPostsTableSeeder::class);
        $this->call(CommentTableSeeder::class);
        $this->call(StarsPostsTableSeeder::class);
        $this->call(HotelsTableSeeder::class);
        $this->call(HotelsRoomsTableSeeder::class);
    }
}
