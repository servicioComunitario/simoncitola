<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAplazadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aplazados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_inscripcion')->unsigned();
            $table->integer('id_motivo')->unsigned();
            $table->date('fecha');
            $table->text('motivo');

            $table->timestamps();

            $table->foreign('id_inscripcion')->references('id')->on('inscripciones');
            $table->foreign('id_motivo')->references('id')->on('motivos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aplazados');
    }
}
