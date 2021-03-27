<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuarioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario', function (Blueprint $table) {
            $table->id('pk_usuario');

            $table->unsignedBigInteger('fk_rol');
            $table->foreign('fk_rol')->references('pk_rol')->on('roles');

            $table->unsignedBigInteger('fk_estado');
            $table->foreign('fk_estado')->references('pk_estado')->on('estados');

            $table->integer('cedula')->unique();

            $table->string('nombre');

            $table->integer('status_user');

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
        Schema::dropIfExists('usuario');
    }
}
