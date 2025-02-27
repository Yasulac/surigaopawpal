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
    Schema::create('users', function (Blueprint $table) {
        $table->id('user_id'); // Custom primary key
        $table->string('fname');
        $table->string('lname');
        $table->string('email')->unique();
        $table->string('cnumber');
        $table->string('username')->unique();
        $table->string('password');
        $table->string('address');
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
