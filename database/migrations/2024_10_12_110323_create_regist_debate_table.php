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
        Schema::create('regist_debate', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->string('team_name', 255);
            $table->string('full_name_s1', 255);
            $table->string('gender_s1', 50);
            $table->string('student_id_number_s1', 100);
            $table->string('major_s1', 255);
            $table->string('faculty_s1', 255);
            $table->string('university_s1', 255);
            $table->string('nationality_s1', 100);
            $table->string('phone_number_s1', 50);
            $table->string('email_address_s1', 255);
            $table->string('photo_s1', 255);
            $table->string('id_student_card_s1', 255);
            $table->string('full_name_s2', 255);
            $table->string('gender_s2', 50);
            $table->string('student_id_number_s2', 100);
            $table->string('major_s2', 255);
            $table->string('faculty_s2', 255);
            $table->string('university_s2', 255);
            $table->string('nationality_s2', 100);
            $table->string('phone_number_s2', 50);
            $table->string('email_address_s2', 255);
            $table->string('photo_s2', 255);
            $table->string('id_student_card_s2', 255);
            $table->string('registration_proof', 255);
            $table->boolean('status')->default(false);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('regist_debate');
    }
};
