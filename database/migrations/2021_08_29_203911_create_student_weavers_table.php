<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentWeaversTable extends Migration
{
    
    public function up()
    {
        Schema::create('student_weavers', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('student_id')->nullable();
            $table->bigInteger('id_no')->nullable();

            $table->string('name')->nullable();
            $table->double('percentage', 8, 2)->default(0);
            $table->bigInteger('effective_on')->nullable();
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
        Schema::dropIfExists('student_weavers');
    }
}
