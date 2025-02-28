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
        Schema::table('rehoming_requests', function (Blueprint $table) {
            $table->string('dog_name')->after('user_id'); // Add after user_id
            $table->string('profile_picture')->nullable()->after('size'); // Allow null values
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('rehoming_requests', function (Blueprint $table) {
            $table->dropColumn(['dog_name', 'profile_picture']);
        });
    }
    
};
