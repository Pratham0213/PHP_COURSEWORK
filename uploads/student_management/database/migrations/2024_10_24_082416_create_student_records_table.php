<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('student_records', function (Blueprint $table) {
        $table->id();
        $table->string('name');
        $table->string('roll_no')->unique();
        $table->date('dob');
        $table->string('admission_no')->unique();
        $table->string('class');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_records');
    }
};
