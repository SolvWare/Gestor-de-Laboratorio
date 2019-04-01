<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSesionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sesions', function (Blueprint $table) {
            $table->increments('id');
            //$table->integer('idSes')->unsigned();
            $table->integer('coSis')->unsigned();
            $table->integer('idH')->unsigned();
            $table->date('fechaSes');
            $table->foreign('coSis')->references('id')->on('usuarios');
           // $table->foreign('idH')->references('id')->on('horarios');
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
        Schema::dropIfExists('sesions');
    }
    
} 
