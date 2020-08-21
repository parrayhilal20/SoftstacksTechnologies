<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_details', function (Blueprint $table) {
            $table->id();
            $table->string('employee_nnumber');
            $table->string('employee_designation');
            $table->string('employee_department');
            $table->string('class_allocated');
            $table->string('stream_allocated');
            $table->string('subject_allocated');
            $table->date('date');
            $table->string('photograph');
            $table->string('status')->default("NOT APPROVED");
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
        Schema::dropIfExists('employee_details');
    }
}
