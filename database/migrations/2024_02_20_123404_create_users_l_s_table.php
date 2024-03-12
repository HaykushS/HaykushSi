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
        Schema::create('users_l_s', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('role', [ 'admin', 'moderator'])->default('admin',);
            $table->integer('tel');
            $table->integer('age');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users_l_s');
        
    }
};
