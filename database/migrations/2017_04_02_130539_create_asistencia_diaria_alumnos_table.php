<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsistenciaDiariaAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencia_diaria_alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_guardia')->unsigned();
            $table->integer('id_dia_laborable')->unsigned();
            $table->text('observacion');

            $table->timestamps();

            $table->foreign('id_guardia')->references('id')->on('guardias');
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
        Schema::dropIfExists('asistencia_diaria_alumnos');
    }
}
