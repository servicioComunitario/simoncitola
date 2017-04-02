<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActasInasistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actas_inasistencias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_dia_laborable')->unsigned();
            $table->integer('id_empleado')->unsigned();
            $table->date('fecha_justificacion');
            $table->date('fecha_no_justificacion');

            $table->timestamps();

            $table->foreign('id_dia_laborable')->references('id')->on('dias_laborables');
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
        Schema::dropIfExists('actas_inasistencias');
    }
}
