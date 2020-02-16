<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('date');
            $table->string('fullName');
            $table->string('emailAddress');
            $table->unsignedBigInteger('landLineNumber');
            $table->unsignedBigInteger('cellNumber');
            $table->unsignedBigInteger('accountNumber');
            $table->string('branchDepartment');
            $table->string('rating');
            $table->string('ratingExplanation');
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
        Schema::dropIfExists('feedback');
    }
}
