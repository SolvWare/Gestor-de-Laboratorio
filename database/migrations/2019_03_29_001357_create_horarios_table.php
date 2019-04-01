<?php
/*
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHorariosTable extends Migration
{ 
    /**
     * Run the migrations.
     *
     * @return void
     *
    public function up()
    {
        Schema::create('horarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idHor');
            $table->integer('labId')->unsigned();
            $table->string('diaHor');
            $table->string('horaHor');
            $table->foreign('labId')->references('idLab')->on('laboratorios');
            $table->timestamps();
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     *
   // public function down()
    {
        Schema::dropIfExists('horarios');
    }
    */
//} */
