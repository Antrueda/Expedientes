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
        Schema::create('area_usuarios', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->unsigned()->comment('CAMPO DE ID DEL USUARIO');
            $table->integer('area_id')->unsigned()->comment('CAMPO DE ID DEL AREA');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('area_id')->references('id')->on('areas');
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
        Schema::dropIfExists('area_usuarios');
    }
};
