<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('rehoming_requests', function (Blueprint $table) {
        $table->id(); // or another primary key if you're using a custom one
        $table->unsignedBigInteger('user_id');
        $table->integer('age');
        $table->string('breed');
        $table->string('sex');
        $table->integer('size');
        $table->timestamps();

        $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rehoming_requests');
    }
};
