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

            $table->string('diaH', 13);
            $table->string('periodoH', 13);

            $table->timestamps();

            //relation
            $table->foreign('laboratorio_id')->references('id')->on('laboratorios')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('materia_id')->references('id')->on('materias')
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
        Schema::dropIfExists('horarios');
    }
}
