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
        
        Schema::create('student_infos', function (Blueprint $table) {
            $table->string('id', 20)->primary();
            $table->string('lName');
            $table->string('fName');
            $table->string('mName');
            $table->date('dob');
            $table->string('nationality');
            $table->enum('gender', ['male', 'female']);
            $table->enum('civilStatus', ['single', 'married', 'widowed', 'divorced']);
            $table->string('contactNo');
            $table->text('pob');
            $table->string('lrn');
            $table->text('college');
            $table->enum('course', ['BS Biology', 'BS Chemistry', 'BS Computer Science', 'BS Information Technology', 'BS Meteorology']);
            $table->enum('year', ['1', '2', '3', '4']);
            $table->enum('block', ['A', 'B', 'C']);
            $table->enum('sem', ['1', '2']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_infos');
    }
};
