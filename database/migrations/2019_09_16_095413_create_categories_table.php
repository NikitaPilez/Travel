<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     * Create category table.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->longText('description');
            $table->string('created_at');
            $table->string('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     * Delete category table.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category');
    }
}
