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
            $table->integer('empleado_suplente_id')->unsigned();
            $table->integer('empleado_suplantado_id')->unsigned();
            $table->text('observacion');
            $table->date('dia_laborable_id');

            $table->index('dia_laborable_id');
            
            $table->timestamps();

            $table->foreign('empleado_suplente_id')
                ->references('id')
                ->on('empleados')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->foreign('empleado_suplantado_id')
                ->references('id')
                ->on('empleados')
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
        Schema::dropIfExists('suplencias');
    }
}
