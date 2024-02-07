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
            $table->Integer('pinnumero')->comment('CAMPO DE NUMERICO DEL ESTADO');
            $table->Integer('numerodocumento')->comment('CAMPO DE NUMERICO DEL ESTADO');
            $table->string('primernombre')->nullable()->comment('CAMPO DE PRIMER NOMBRE');
            $table->string('segundonombre')->nullable()->comment('CAMPO DE SEGUNDO NOMBRE');
            $table->string('primerapellido')->nullable()->comment('CAMPO DE PRIMER NOMBRE');
            $table->string('segundoapellido')->nullable()->comment('CAMPO DE SEGUNDO NOMBRE');
            $table->string('primerTelefono')->nullable()->comment('CAMPO DE PRIMER TELEFONO');
            $table->string('celular')->nullable()->comment('CAMPO DE CELULAR');
            $table->string('email')->nullable()->comment('CAMPO DE EMAIL');
            $table->string('direccion')->nullable()->comment('CAMPO DE DIRECCION');
            $table->bigInteger('user_id')->unsigned()->comment('CAMPO DE ID DEL USUARIO');
            $table->bigInteger('area_id')->unsigned()->comment('CAMPO DE ID DEL AREA');
            $table->bigInteger('tramite_id')->unsigned()->comment('CAMPO DE ID DEL AREA');
            $table->bigInteger('objet_id')->unsigned()->comment('CAMPO DE ID DEL AREA');
            $table->bigInteger('esta_id')->unsigned()->comment('CAMPO DE ID DEL ESTADO');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('area_id')->references('id')->on('areas');
            $table->foreign('tramite_id')->references('id')->on('tramites');
            $table->foreign('objet_id')->references('id')->on('objetotramites');
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
