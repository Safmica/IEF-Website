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
        Schema::create('regist_newscasting', function (Blueprint $table) {
            $table->id();
            $table->string('full_name', 255);
            $table->string('gender', 50);
            $table->string('student_id_number', 100);
            $table->string('major', 255);
            $table->string('faculty', 255);
            $table->string('university', 255);
            $table->string('nationality', 100);
            $table->string('phone_number', 50);
            $table->string('email_address', 255);
            $table->string('photo', 255);
            $table->string('id_student_card', 255);
            $table->string('registration_proof', 255);
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('regist_newscasting');
    }
};
