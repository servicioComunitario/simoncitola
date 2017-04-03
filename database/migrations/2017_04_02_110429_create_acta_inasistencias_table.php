<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActaInasistenciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acta_inasistencias', function (Blueprint $table) {
            $table->increments('id');
            $table->date('dia_laborable_id');
            $table->integer('empleado_id')->unsigned();
            $table->date('fecha_justificacion');
            $table->date('fecha_no_justificacion');

            $table->timestamps();

            $table->foreign('dia_laborable_id')
                ->references('id')
                ->on('dias_laborables')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->foreign('empleado_id')
                ->references('id')
                ->on('empleados')
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
        Schema::dropIfExists('acta_inasistencias');
    }
}
