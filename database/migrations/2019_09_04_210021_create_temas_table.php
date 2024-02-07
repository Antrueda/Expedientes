<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateTemasTable extends Migration
{
  private $tablaxxx = 'temas';
  private $tablaxxx2 = 'parametro_tema';
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create($this->tablaxxx, function (Blueprint $table) {
      $table->id();
      $table->string('nombre')->unique();
      $table->bigInteger('user_crea_id')->unsigned()->nullable();
      $table->bigInteger('user_edita_id')->unsigned()->nullable();
      $table->bigInteger('esta_id')->unsigned()->default(1);
      $table->foreign('esta_id')->references('id')->on('estados');
      $table->timestamps();
    });


    Schema::create($this->tablaxxx2, function (Blueprint $table) {
      $table->bigInteger('parametro_id')->unsigned();
      $table->bigInteger('tema_id')->unsigned();
      $table->bigInteger('user_crea_id')->unsigned()->nullable();
      $table->bigInteger('user_edita_id')->unsigned()->nullable();
      $table->foreign('parametro_id')->references('id')->on('parametros');
      $table->foreign('tema_id')->references('id')->on('temas');
    });
 
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists($this->tablaxxx2);
    Schema::dropIfExists($this->tablaxxx);
  }
}
