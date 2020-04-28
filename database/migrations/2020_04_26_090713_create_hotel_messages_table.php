<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelMessagesTable extends Migration
{
    /**
     * Run the migrations.
     * Create hotel_messages table.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_messages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('hotel_id')->unsigned();
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
            $table->string('name');
            $table->string('email');
            $table->string('message');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * Delete hotel_messages table.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_messages');
    }
}
