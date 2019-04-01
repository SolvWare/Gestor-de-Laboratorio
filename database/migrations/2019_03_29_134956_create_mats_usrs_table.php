<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatsUsrsTable extends Migration
{ 
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mats_usrs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('matId')->unsigned();
            $table->integer('coSi')->unsigned();
            $table->foreign('matId')->references('id')->on('materias');
            $table->foreign('coSi')->references('id')->on('usuarios');
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
        Schema::dropIfExists('mats_usrs');
    }
    
}  
