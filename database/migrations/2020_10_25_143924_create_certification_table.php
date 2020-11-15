<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCertificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('certifications', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('recruit_id')->nullable();
            $table->foreign('recruit_id')->references('id')->on('recruits')->nullable();
            $table->unsignedBigInteger("coord_id")->nullable();
            $table->foreign('coord_id')->references('id')->on('coordinators')->nullable();
            $table->unsignedBigInteger('move_id')->nullable();
            $table->foreign('move_id')->references('id')->on('moves')->nullable();
            $table->date('date')->nullable();
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
        Schema::dropIfExists('certifications');
    }
}
