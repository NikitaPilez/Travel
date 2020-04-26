<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelRoomsTable extends Migration
{
    /**
     * Run the migrations.
     * Create hotel_rooms table.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hotel_id')->unsigned();
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
            $table->string('price');
            $table->string('photo');
            $table->string('title');
            $table->string('status')->nullable();
            $table->integer('person_count');
            $table->integer('bed_count');
            $table->integer('room_count');
            $table->string('bar')->nullable();
            $table->string('smoking')->nullable();
            $table->string('tv')->nullable();
            $table->string('created_at');
        });
    }

    /**
     * Reverse the migrations.
     * Delete hotel_rooms table.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_rooms');
    }
}
