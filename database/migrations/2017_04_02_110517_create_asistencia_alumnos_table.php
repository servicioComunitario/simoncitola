<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsistenciaAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencia_alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alumno_id')->unsigned();
            $table->date('dia_laborable_id');
            $table->boolean('presente');

            $table->timestamps();

            $table->foreign('dia_laborable_id')
                ->references('id')
                ->on('dias_laborables')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->foreign('alumno_id')
                ->references('id')
                ->on('alumnos')
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
        Schema::dropIfExists('asistencia_alumnos');
    }
}
