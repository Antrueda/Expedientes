<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateParametrosTable extends Migration
{
  private $tablaxxx = 'parametros';
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