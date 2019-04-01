<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('codSis')->unsigned();
            //$table->integer('roId')->unsigned();
            $table->integer('ciUsr');
            $table->string('nombreUsr', 30);
            $table->string('aplellidoUsr', 30);
           // $table->foreign('roId')->references('idRol')->on('rols');
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
        Schema::dropIfExists('usuarios');
    }
    
}
