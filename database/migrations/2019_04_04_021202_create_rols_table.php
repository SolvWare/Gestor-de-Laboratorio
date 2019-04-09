<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rols', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codeR');
            $table->string('nameR');
            $table->string('prib1')->nullable();
            $table->string('prib2')->nullable();
            $table->string('prib3')->nullable();
            $table->string('prib4')->nullable();
            $table->string('prib5')->nullable();
            $table->string('prib6')->nullable();
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
        Schema::dropIfExists('rols');
    }
}
