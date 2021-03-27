<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistroVotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registro_votos', function (Blueprint $table) {

            $table->id('pk_registro_votos');

            $table->unsignedBigInteger('fk_eleccion');
            $table->foreign('fk_eleccion')->references('pk_eleccion')->on('eleccion');

            $table->unsignedBigInteger('fk_estado');
            $table->foreign('fk_estado')->references('pk_estado')->on('estados');

            $table->string('situr');

            $table->integer('cedula')->unique();

            $table->BigInteger('telefono');

            $table->rememberToken();

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
        Schema::dropIfExists('registro_votos');
    }
}
