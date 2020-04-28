<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFollowersTable extends Migration
{
    /**
     * Run the migrations.
     * Create followers table.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('followers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('follower_id')->unsigned();
            $table->foreign('follower_id')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('following_id')->unsigned();
            $table->foreign('following_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('created_at');
        });
    }

    /**
     * Reverse the migrations.
     * Delete followers table.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('followers');
    }
}
