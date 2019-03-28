<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asurs', function (Blueprint $table) {
            $table->integer('rol_id')->unsigned();
            $table->foreign('rol_id')->references('id')->on('rols');
            $table->integer('usr_id')->unsigned();
            $table->foreign('usr_id')->references('id')->on('usuarios');
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
        Schema::dropIfExists('asurs');
    }
}
