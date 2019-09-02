<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pdetails', function (Blueprint $table) {
           $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('slug');
            $table->integer('tcode');
            $table->string('fname');
            $table->string('mname');
            $table->string('lname');
            $table->date('dob');
            $table->string('gender');
            $table->string('country');
            $table->string('pnumber');
            $table->string('disability');
            $table->string('tsubject');
            $table->string('e_level');
            $table->date('c_year');
            $table->string('experience');
            $table->string('other');
            $table->string('address');
            $table->string('marital');
            $table->string('cresidence');
            $table->string('presidence');
            $table->string('ecertificates');
            $table->string('pcertificates');
            $table->string('bcertificates');
            $table->string('cvitae');
            $table->foreign('user_id')->references('id')->on('users');

            $table->softDeletes();
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
        Schema::dropIfExists('pdetails');
    }
}
