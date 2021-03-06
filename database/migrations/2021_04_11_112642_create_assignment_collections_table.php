<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssignmentCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignment_collections', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('assignment_collect_id',10)->unique();
            $table->mediumText('details');
            $table->string('assignment_id',10);
            $table->foreign('assignment_id')->references('assignment_id')->on('assignments');
            $table->string('student_id',10);
            $table->foreign('student_id')->references('student_id')->on('students');
            $table->string('course_id',10);
            $table->foreign('course_id')->references('course_id')->on('courses');
            $table->string('teacher_id',10);
            $table->foreign('teacher_id')->references('teacher_id')->on('teachers');
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
        Schema::dropIfExists('assignment_collections');
    }
}
