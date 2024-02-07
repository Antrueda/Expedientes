<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSisDepartamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sis_departams', function (Blueprint $table) {
            $table->increments('id')->start(1)->nocache()->comment('CAMPO DE LLAVE PRIMARIA DE LA TABLA');;

            $table->string('s_departamento')->comment('CAMPO DE NOMBRE DEL DEPARTAMENTO');

            $table->Integer('user_crea_id');
            $table->integer('user_edita_id');
            $table->bigInteger('esta_id')->unsigned()->default(1);
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
        
        Schema::dropIfExists('sis_departams');
    }
}
