<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailsTable extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('details', function (Blueprint $table) {
            $table->id();
            $table->string('number_of_guest');
            $table->unsignedBigInteger('dj_id');
            $table->unsignedBigInteger('venue_id');
            $table->unsignedBigInteger('catering_id');
           
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('theme_id');
            $table->unsignedBigInteger('cake_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('dj_id')->references('id')->on('dj');
            $table->foreign('venue_id')->references('id')->on('venue');
            $table->foreign('catering_id')->references('id')->on('catering');
        
            $table->foreign('theme_id')->references('id')->on('theme');
            $table->foreign('cake_id')->references('id')->on('cake');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::dropIfExists('details');
    }
}
