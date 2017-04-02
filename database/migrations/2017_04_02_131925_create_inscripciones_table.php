<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscripcionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripciones', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_alumno')->unsigned();
            $table->integer('id_seccion')->unsigned();
            $table->integer('id_representante_padre')->unsigned();
            $table->integer('id_representante_madre')->unsigned();
            $table->integer('id_responsable')->unsigned();
            $table->boolean('partida_nacimiento');
            $table->boolean('certificado_vacuna');
            $table->boolean('foto');
            $table->boolean('copia_cedula_madre');
            $table->boolean('constancia_trabajo');
            $table->boolean('carta_residencia');
            $table->boolean('otros_ninios_inscritos');
            $table->boolean('colabora');
            $table->integer('id_dia_laborable')->unsigned();

            $table->timestamps();

            $table->foreign('id_alumno')->references('id')->on('alumnos');
            $table->foreign('id_representante_padre')->references('id')->on('representantes');
            $table->foreign('id_representante_madre')->references('id')->on('representantes');
            $table->foreign('id_responsable')->references('id')->on('representantes');
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
        Schema::dropIfExists('inscripciones');
    }
}
