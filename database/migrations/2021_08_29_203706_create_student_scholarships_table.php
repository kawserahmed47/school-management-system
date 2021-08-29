<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentScholarshipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_scholarships', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('student_id')->nullable();
            $table->bigInteger('id_no')->nullable();

            $table->string('name')->nullable();
            $table->double('amount', 8, 2)->default(0);
            $table->double('balance', 8, 2)->default(0);
            
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
        Schema::dropIfExists('student_scholarships');
    }
}
