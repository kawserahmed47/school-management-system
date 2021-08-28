<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeeCategoryAmountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fee_category_amounts', function (Blueprint $table) {
            $table->id();

            $table->foreignId('fee_category_id')->constrained('fee_categories')->onDelete('cascade');;
            $table->foreignId('student_class_id')->constrained('student_classes')->onDelete('cascade');;

            $table->double('amount', 8, 2)->default(0);

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
        Schema::dropIfExists('fee_category_amounts');
    }
}
