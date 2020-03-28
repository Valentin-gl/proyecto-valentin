<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cuenta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cuenta', function (Blueprint $table) {
    $table->increments('id');
    $table->integer('usuario_id')->unsigned();
    $table->string('nombre');
    $table->text('detalles');
    $table->timestamps();
    $table->foreign('usuario_id')->references('id')->on('usuario');
    });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
