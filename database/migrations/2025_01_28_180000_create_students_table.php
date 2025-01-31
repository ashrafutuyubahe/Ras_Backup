<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id('studentId');
            $table->string('studentFirstName');
            $table->string('studentLastName');
            $table->string('studentEmail');
            $table->bigInteger('classId'); 
            $table->timestamps();

            $table->primary('studentId');
            $table->unique('studentFirstName');
            $table->unique('classId');
            
            $table->foreign('classId')->references('id')->on('classes'); 
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
