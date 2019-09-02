<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTreplaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('treplays', function (Blueprint $table) {
           $table->integer('tcode');
            $table->integer('code');
            $table->string('sreq');
            $table->string('cduration');
            $table->string('sdate');
            $table->string('salary');
            $table->string('contact');
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
        Schema::dropIfExists('treplays');
    }
}
