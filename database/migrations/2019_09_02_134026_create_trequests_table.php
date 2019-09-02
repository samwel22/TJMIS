<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trequests', function (Blueprint $table) {
            $table->integer('school_id')->unsigned();
            $table->integer('tcode');
            $table->string('tsubject');
            $table->string('cduration');
            $table->double('salary',2);
            $table->foreign('school_id')->references('id')->on('schools');
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
        Schema::dropIfExists('trequests');
    }
}
