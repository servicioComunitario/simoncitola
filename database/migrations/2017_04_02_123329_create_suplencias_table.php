<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuplenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('suplencias', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_empleado_suplente')->unsigned();
            $table->integer('id_empleado_suplantado')->unsigned();
            $table->text('observacion');
            $table->integer('id_dia_laborable')->unsigned();
            
            $table->timestamps();

            $table->foreign('id_empleado_suplente')->references('id')->on('empleados');
            $table->foreign('id_empleado_suplantado')->references('id')->on('empleados');
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
        Schema::dropIfExists('suplencias');
    }
}
