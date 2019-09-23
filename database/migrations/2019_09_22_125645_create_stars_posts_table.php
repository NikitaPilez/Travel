<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStarsPostsTable extends Migration
{
    /**
     * Run the migrations.
     * Create stars_posts table.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stars_posts', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('post_id')->unsigned();
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->string('created_at');
        });
    }

    /**
     * Reverse the migrations.
     * Delete stars_posts.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stars_posts');
    }
}
