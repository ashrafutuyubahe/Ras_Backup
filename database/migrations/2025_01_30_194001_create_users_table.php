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
    Schema::create('users', function (Blueprint $table) {
        $table->id();
        $table->enum('userPosition', ['CLASS_MONITOR', 'HEAD_TEACHER', 'TEACHER', 'PATRON']);
        $table->string('userName');
        $table->string('userEmail');
        $table->string('password');
        $table->string('classe')->nullable();
        $table->string('lesson')->nullable();
        $table->timestamps();
    });
}

};
