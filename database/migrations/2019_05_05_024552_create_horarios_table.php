<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('laboratorio_id')->unsigned();
            $table->integer('materia_id')->unsigned();
            $table->string('dia');
            $table->timeTz('hora_ini');
            $table->timeTz('hora_fin');
            $table->string('estado')->default='habilitado';
            $table->timestamps();

            $table->foreign('laboratorio_id')->references('id')->on('laboratorios');
            $table->foreign('materia_id')->references('id')->on('materias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horarios');
    }
}
