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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id('addressId');
            $table->string('studentId', 20);
            $table->foreign('studentId')->references('id')->on('student_infos')->onDelete('cascade');
            $table->text('permStreet');
            $table->text('permCity');
            $table->text('permProvince');
            $table->bigInteger('permPostal');
            $table->text('currStreet');
            $table->text('currCity');
            $table->text('currProvince');
            $table->bigInteger('currPostal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
