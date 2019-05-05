<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codMat');
            $table->string('nomMat');
            $table->timestamps();
        });

        //user & materias = user_materia
        Schema::create('user_materia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('materia_id')->unsigned();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('materia_id')->references('id')->on('materia');

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
        Schema::dropIfExists('materias');
    }
}
