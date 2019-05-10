<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleReportesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_reportes', function (Blueprint $table) {
            $table->increments('id');
            $table->time('horaEntrada');
            $table->time('horaSalida');
            $table->string('observacion');
            $table->string('maquina');
            $table->integer('reporte_id')->unsigned();
            $table->timestamps();

            $table->foreign('reporte_id')->references('id')->on('reportes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_reportes');
    }
}
