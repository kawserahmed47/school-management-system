<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentFeesTable extends Migration
{
    
    public function up()
    {
        Schema::create('student_fees', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('user_id')->nullable();
            $table->bigInteger('student_id')->nullable();
            $table->bigInteger('id_no')->nullable();

            
            $table->bigInteger('student_year_id')->nullable();
            $table->bigInteger('student_class_id')->nullable();
            $table->bigInteger('fee_category_amount_id')->nullable();
            $table->bigInteger('fee_category_id')->nullable();


            $table->double('amount', 8,2);
            $table->string('payment_date')->nullable();

            $table->text('description')->nullable();
            $table->boolean('status')->comment("1=>active, 0=>inactive")->default(1);
            $table->bigInteger('created_by');
            $table->bigInteger('updated_by')->nullable();

            $table->timestamps();
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('student_fees');
    }
}
