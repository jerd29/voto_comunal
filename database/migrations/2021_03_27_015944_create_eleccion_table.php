<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEleccionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eleccion', function (Blueprint $table) {
            $table->id('pk_eleccion');

            $table->unsignedBigInteger('fk_tipo_eleccion');
            $table->foreign('fk_tipo_eleccion')->references('pk_tipo_eleccion')->on('tipo_eleccion');

            $table->date('fecha_eleccion');

            $table->integer('status_eleccion');

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
        Schema::dropIfExists('eleccion');
    }
}
