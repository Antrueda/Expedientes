<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('expedientes', function (Blueprint $table) {
            $table->id();
            $table->Integer('radicado')->comment('CAMPO DE NUMERICO DEL ESTADO');
            $table->integer('user_id')->unsigned()->comment('CAMPO DE ID DEL USUARIO');
            $table->integer('area_id')->unsigned()->comment('CAMPO DE ID DEL AREA');
            $table->integer('esta_id')->unsigned()->comment('CAMPO DE ID DEL ESTADO');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('area_id')->references('id')->on('areas');
            $table->foreign('esta_id')->references('id')->on('estados');
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
        Schema::dropIfExists('expedientes');
    }
};
