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
        Schema::create('soporteexp', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion',500)->nullable();
            $table->string('rutaFinalFile')->nullable();
            $table->string('nombreOriginalFile')->nullable();
            $table->bigInteger('idtramite')->unsigned()->default(1)->nullable();
            $table->foreign('idtramite')->references('id')->on('expedientes');
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
        Schema::dropIfExists('soporteexp');
    }
};
