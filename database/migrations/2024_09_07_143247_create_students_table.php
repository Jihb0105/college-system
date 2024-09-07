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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('stu_name');
            $table->string('stu_id');
            $table->string('stu_primaryid');
            $table->string('stu_primaryidtype');
            $table->string('stu_gender');
            $table->string('stu_email');
            $table->string('stu_phonenum');
            $table->date('stu_enrollmentdate');
            $table->text('stu_address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
