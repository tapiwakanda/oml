<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClaimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('claims', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('fullName');
            $table->string('policyNumber')->unique();
            $table->string('gender');
            $table->string('dob');
            $table->string('idNumber');
            $table->string('occupation');
            $table->string('homeAddress');
            $table->string('postalAddress');
            $table->string('emailAddress');
            $table->unsignedBigInteger('businessTelNumber');
            $table->unsignedBigInteger('homeTelNumber');
            $table->unsignedBigInteger('cellNumber');
            $table->string('agreement');
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
        Schema::dropIfExists('claims');
    }
}
