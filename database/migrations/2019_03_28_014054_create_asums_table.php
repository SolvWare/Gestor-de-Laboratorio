<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asums', function (Blueprint $table) {
            $table->integer('mat_id')->unsigned();
            $table->foreign('mat_id')->references('id')->on('materias');
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
        Schema::dropIfExists('asums');
    }
}
