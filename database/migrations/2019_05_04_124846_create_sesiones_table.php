<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSesionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sesiones', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('inscripcione_id')->unsigned();

            $table->string('inicio');
            $table->string('fin');
            $table->integer('maquina');
            $table->string('observacion');

            $table->timestamps();
            
            //relation
            $table->foreign('inscripcione_id')->references('id')->on('inscripciones')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sesiones');
    }
}
