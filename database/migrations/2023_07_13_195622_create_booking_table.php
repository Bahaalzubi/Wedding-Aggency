<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->string('bride_name');
            $table->string('groom_name');
            $table->date('wedding_date'); // Changed to 'date' data type
            $table->time('time'); // Changed to 'time' data type
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('details_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('details_id')->references('id')->on('details');
            $table->timestamps();
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
