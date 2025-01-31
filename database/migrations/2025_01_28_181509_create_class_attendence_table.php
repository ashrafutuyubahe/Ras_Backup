<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('class_attendence', function (Blueprint $table) {
            $table->id('attendenceId');
            $table->bigInteger('studentId');
            $table->unsignedBigInteger('userId');
            $table->enum('stream', ['A', 'B', 'C', 'D']);
            $table->enum('recordedBy', ['TEACHER', 'CHEFF']);
            $table->enum('action', ['absent', 'present']);
            $table->timestamps();

            $table->primary('attendenceId');

           
            $table->foreign('studentId')->references('studentId')->on('students');
            $table->foreign('userId')->references('id')->on('users');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('class_attendence');
    }
};
