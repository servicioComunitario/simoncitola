<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAsistenciasEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asistencias_empleados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_dia_laborable')->unsigned();
            $table->integer('id_empleado')->unsigned();
            $table->boolean('presente');
            $table->boolean('ausencia_justificada');
            $table->text('justificacion');

            $table->timestamps();

            $table->foreign('id_empleado')->references('id')->on('empleados');
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
        Schema::dropIfExists('asistencias_empleados');
    }
}
