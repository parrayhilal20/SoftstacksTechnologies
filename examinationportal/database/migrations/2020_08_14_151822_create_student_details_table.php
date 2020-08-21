<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_details', function (Blueprint $table) {
            $table->id();
            $table->string('registration_number');
            $table->string('roll_number');
            $table->string('class');
            $table->string('stream');
            $table->time('exam_start_time');
            $table->time('exam_end_time');
            $table->date('exam_date');
            $table->string('std_code');
            $table->string('photograph');
            $table->string('paper_status');
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
        Schema::dropIfExists('student_details');
    }
}
