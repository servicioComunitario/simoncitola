<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiasInasistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dias_inasistencias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_dia_laborable')->unsigned();
            $table->integer('id_acta_inasistencia')->unsigned();

            $table->timestamps();

            $table->foreign('id_dia_laborable')->references('id')->on('dias_laborables');
            $table->foreign('id_acta_inasistencia')->references('id')->on('actas_inasistencias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dias_inasistencias');
    }
}
