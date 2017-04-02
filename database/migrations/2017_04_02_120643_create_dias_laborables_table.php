<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiasLaborablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dias_laborables', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_periodo')->unsigned();
            $table->date('fecha');
            $table->boolean('academico');
            $table->timestamps();

            $table->foreign('id_periodo')->references('id')->on('periodos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dias_laborables');
    }
}
