<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatriculaFinalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matricula_finales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('seccion_id')->unsigned();
            $table->date('dia_laborable_id');
            $table->text('observacion')->nullable();

            $table->timestamps();

            $table->foreign('seccion_id')
                ->references('id')
                ->on('secciones')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->foreign('dia_laborable_id')
                ->references('id')
                ->on('dias_laborables')
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
        Schema::dropIfExists('matricula_finales');
    }
}
