<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentResponsesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_responses', function (Blueprint $table) {
            $table->id();
            $table->string('student_rollnumber')->nullable();
            $table->string('question_number')->nullable();
            $table->string('student_response')->nullable();
            $table->string('question_status')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_responses');
    }
}
