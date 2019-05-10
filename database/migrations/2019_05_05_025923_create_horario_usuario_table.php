<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorarioUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('horario_usuario', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('horario_id')->unsigned();
            $table->integer('usuario_id')->unsigned();
            $table->timestamps();

            $table->foreign('horario_id')->references('id')->on('horarios');
            $table->foreign('usuario_id')->references('id')->on('usuarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('horario_usuario');
    }
}
