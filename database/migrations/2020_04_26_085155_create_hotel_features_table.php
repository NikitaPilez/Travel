<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelFeaturesTable extends Migration
{
    /**
     * Run the migrations.
     * Create hotel_features table.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_features', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('hotel_id')->unsigned();
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
            $table->string('icon');
            $table->string('title');
            $table->string('description');
            $table->string('photo');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * Delete hotel_features table.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_features');
    }
}
