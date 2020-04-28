<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     * Create posts table.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('category_id')->unsigned();
            $table->string('status')->nullable();
            $table->string('isPopular')->nullable();
            $table->longText('header')->nullable();
            $table->longText('body');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('category')->onDelete('cascade');
            $table->string('created_at');
            $table->string('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     * Delete posts table.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
