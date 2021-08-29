<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assign_students', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('student_id')->nullable();
            $table->bigInteger('id_no')->nullable();

            $table->bigInteger('student_class_id')->nullable();
            $table->bigInteger('student_group_id')->nullable();
            $table->bigInteger('student_shift_id')->nullable();
            $table->bigInteger('student_year_id')->nullable();



            $table->text('description')->nullable();
            $table->boolean('status')->comment("1=>active, 0=>inactive")->default(1);
            $table->bigInteger('created_by');
            $table->bigInteger('updated_by')->nullable();
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
        Schema::dropIfExists('assign_students');
    }
}
