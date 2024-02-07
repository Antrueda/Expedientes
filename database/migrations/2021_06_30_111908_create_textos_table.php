<?php

use App\CamposMagicos\CamposMagicos;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTextosTable extends Migration
{
    private $tablaxxx = 'conci_textos';

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create($this->tablaxxx, function (Blueprint $table) {
            $table->id();
            $table->text('texto')->nullable()->comment('OBSERVACION DE LA SALIDA');
            $table->bigInteger('tipotexto_id')->unsigned()->comment('CAMPO ID NNAJ');
            $table->foreign('tipotexto_id')->references('id')->on('parametros');
            $table->Integer('user_crea_id')->nullable();
            $table->integer('user_edita_id')->nullable();
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

        Schema::dropIfExists($this->tablaxxx);
    }
}
