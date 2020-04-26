<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelPartnersTable extends Migration
{
    /**
     * Run the migrations.
     * Create hotel_partners table.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_partners', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hotel_id')->unsigned();
            $table->foreign('hotel_id')->references('id')->on('hotels')->onDelete('cascade');
            $table->string('photo');
            $table->string('url');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     * Delete hotel_partners table.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_partners');
    }
}
