<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();

            $table->bigInteger('id_no')->unique();
            $table->bigInteger('user_id')->unique();
            $table->string('slug')->unique();


            $table->string('first_name');
            $table->string('last_name')->nullable();
            $table->string('nickname')->nullable();

            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('spouse_name')->nullable();

            $table->string('father_profession')->nullable();
            $table->string('mother_profession')->nullable();
            $table->string('spouse_profession')->nullable();

            $table->text('description')->nullable();
            $table->string('image')->nullable();

            $table->enum('gender', ['male', 'female', 'other']);
            $table->string('dob')->nullable();
            $table->string('birth_certificate')->nullable()->unique();  
            $table->string('nid')->nullable(); 
            $table->string('driving_licence')->nullable();
            
            $table->string('contact_mobile_no')->nullable();
            $table->string('emergency_mobile_no')->nullable();
            $table->string('email')->nullable();

            $table->text('full_address')->nullable();

            $table->bigInteger('division_id')->nullable();
            $table->bigInteger('district_id')->nullable();
            $table->bigInteger('thana_id')->nullable();
            $table->bigInteger('union_id')->nullable();
            $table->bigInteger('ward_no')->nullable();
            $table->string('village')->nullable();


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
        Schema::dropIfExists('students');
    }
}
