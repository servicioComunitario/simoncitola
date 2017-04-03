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
            $table->integer('alumno_id')->unsigned();
            $table->integer('seccion_id')->unsigned();
            $table->integer('representante_padre_id')->unsigned()->nullable();
            $table->integer('representante_madre_id')->unsigned()->nullable();
            $table->integer('responsable_id')->unsigned();
            $table->boolean('partida_nacimiento');
            $table->boolean('certificado_vacuna');
            $table->boolean('foto');
            $table->boolean('copia_cedula_madre');
            $table->boolean('constancia_trabajo');
            $table->boolean('carta_residencia');
            $table->boolean('otros_ninios_inscritos');
            $table->boolean('colabora');
            $table->date('dia_laborable_id');

            $table->index('dia_laborable_id');

            $table->timestamps();

            $table->foreign('alumno_id')
                ->references('id')
                ->on('alumnos')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->foreign('representante_padre_id')
                ->references('id')
                ->on('representantes')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->foreign('representante_madre_id')
                ->references('id')
                ->on('representantes')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->foreign('responsable_id')
                ->references('id')
                ->on('representantes')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->foreign('seccion_id')
                ->references('id')
                ->on('secciones')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->foreign('dia_laborable_id')
                ->references('id')
                ->on('dia_laborables')
                ->onUpdate('cascade')
                ->onDelete('restrict');
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
