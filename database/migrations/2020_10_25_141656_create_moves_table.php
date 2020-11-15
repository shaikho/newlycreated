<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMovesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('moves', function (Blueprint $table) {
            $table->increments('id');
            $table->date('monthlyfollow')->nullable();
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->unsignedBigInteger('recruit_id')->nullable();
            $table->foreign('recruit_id')->references('id')->on('recruits')->nullable();
            $table->unsignedBigInteger('represent_id')->nullable();
            $table->foreign('represent_id')->references('id')->on('representitives')->nullable();
            $table->unsignedBigInteger("coord_id")->nullable();
            $table->foreign('coord_id')->references('id')->on('coordinators')->nullable();
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
        Schema::dropIfExists('moves');
    }
}
