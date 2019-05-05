<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDetalleReporteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Detalle_Reporte', function (Blueprint $table) {
            $table->increments('id');
            $table->time('horaEntrada');
            $table->time('horaSalida');
            $table->string('observacion');
            $table->string('maquina');
            $table->integer('repor_id')->unsigned();

            $table->foreign('repor_id')->references('id')->on('reporte')->onDelete('cascade');
            
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
        Schema::dropIfExists('Detalle_Reporte');
    }
}
