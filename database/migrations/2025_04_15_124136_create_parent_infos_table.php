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
        Schema::create('parent_infos', function (Blueprint $table) {
            $table->id('parentId');
            $table->string('studentId', 20);
            
            $table->string('mLName');
            $table->string('mFName');
            $table->string('mMName');
            $table->string('mDOB');
            $table->string('mNationality');
            $table->string('mContact');
            $table->string('fLName');
            $table->string('fFName');
            $table->string('fMName');
            $table->string('fDOB');
            $table->string('fNationality');
            $table->string('fContact');
            $table->string('gLName');
            $table->string('gFName');
            $table->string('gMName');
            $table->string('gContact');
            $table->timestamps();

            $table->foreign('studentId')->references('id')->on('student_infos')->onDelete('cascade');
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parent_infos');
    }
};
