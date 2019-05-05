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
            $table->integer('id_lab');
            $table->integer('id_mat');

            $table->foreign('id_lab')->references('id')->on('laboratorio')->onDelete('cascade');
            $table->foreign('id_mat')->references('id')->on('materia')->onDelete('cascade');

            $table->timestamps();
        });

        //usuario & horario
        Schema::create('asignar', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_hor')->unsigned();
            $table->integer('cod_sis')->unsigned();

            $table->foreign('id_hor')->references('id')->on('horario');
            $table->foreign('cod_sis')->references('cosis')->on('users');

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
        Schema::dropIfExists('Detalle_horario');
    }
}
