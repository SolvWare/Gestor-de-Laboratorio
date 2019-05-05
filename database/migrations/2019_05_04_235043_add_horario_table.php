<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddHorarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horario', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Dia');
            $table->time('horaInicio');
            $table->time('horaFin');
            $table->integer('labo_id')->unsigned();
            $table->integer('mat_id')->unsigned();

            $table->foreign('labo_id')->references('id')->on('users');
            $table->foreign('mat_id')->references('id')->on('materia');

            $table->timestamps();
        });

        //usuario & horario
        Schema::create('user_horario', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('hor_id')->unsigned();
            $table->integer('user_id')->unsigned();

            $table->foreign('hor_id')->references('id')->on('horario');
            $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('horario');
    }
}
