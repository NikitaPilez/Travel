<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     * Create hotels table.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('header');
            $table->string('photo');
            $table->string('address');
            $table->string('city');
            $table->string('country');
            $table->string('phone');
            $table->string('website');
            $table->string('created_at');
        });
    }

    /**
     * Reverse the migrations.
     * Delete hotels table.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotels');
    }
}
