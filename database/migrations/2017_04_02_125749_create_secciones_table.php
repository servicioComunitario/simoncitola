<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('secciones', function (Blueprint $table) {
            $table->increments('id');
            $table->text('nombre');
            $table->integer('id_periodo')->unsigned();
            $table->integer('id_empleado')->unsigned();
            $table->integer('max_alumnos');
            $table->integer('edad_alumno');

            $table->timestamps();

            $table->foreign('id_periodo')->references('id')->on('periodos');
            $table->foreign('id_empleado')->references('id')->on('empleados');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('secciones');
    }
}
