<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatriculasFinalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriculas_finales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_seccion')->unsigned();
            $table->integer('id_dia_laborable')->unsigned();
            $table->text('observacion');

            $table->timestamps();

            $table->foreign('id_seccion')->references('id')->on('secciones');
            $table->foreign('id_dia_laborable')->references('id')->on('dias_laborables');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matriculas_finales');
    }
}
