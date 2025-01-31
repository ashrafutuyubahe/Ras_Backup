<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id(); 
            $table->string('className');
            $table->enum('stream', ['A', 'B', 'C', 'D']);
            $table->timestamps();

            $table->unique('className');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('classes');
    }
};
