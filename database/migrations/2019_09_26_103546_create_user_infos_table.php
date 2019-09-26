<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserInfosTable extends Migration
{
    /**
     * Run the migrations.
     * Create user_infos table.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_infos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('phone');
            $table->string('photo');
            $table->string('background_photo');
            $table->longText('description');
            $table->string('facebook_url');
            $table->string('instagram_url');
            $table->string('twitter_url');
        });
    }

    /**
     * Reverse the migrations.
     * Delete user_infos table.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_infos');
    }
}
