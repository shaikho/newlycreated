<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNationalnumberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nationalnumbers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nationalnumber')->nullable();
            $table->date('dateofbirth')->nullable();
            $table->string('placeofbirth')->nullable();
            $table->string('mothername')->nullable();
            $table->enum('gender',['male'],['female'])->nullable();
            $table->unsignedBigInteger('recruit_id')->nullable();
            $table->foreign('recruit_id')->references('id')->on('recruits')->nullable();
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
        Schema::dropIfExists('nationalnumbers');
    }
}
