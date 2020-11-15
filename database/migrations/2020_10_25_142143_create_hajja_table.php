<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHajjaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hajjas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedBigInteger('recruit_id')->nullable();
            $table->foreign('recruit_id')->references('id')->on('recruits')->nullable();
            $table->unsignedBigInteger('represent_id')->nullable();
            $table->foreign('represent_id')->references('id')->on('representitives')->nullable();
            $table->unsignedBigInteger('move_id')->nullable();
            $table->foreign('move_id')->references('id')->on('moves')->nullable();
            $table->date('date')->nullable();
            $table->string('state')->nullable();
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
        Schema::dropIfExists('hajjas');
    }
}
