<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     * Create tags table.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('status');
            $table->string('created_at');
        });
    }

    /**
     * Reverse the migrations.
     * Delete tags table.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
    }
}
