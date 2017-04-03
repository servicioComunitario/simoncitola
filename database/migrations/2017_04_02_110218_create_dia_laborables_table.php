<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiaLaborablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dia_laborables', function (Blueprint $table) {
            $table->date('id');
            $table->integer('periodo_id')->unsigned();
            $table->boolean('academico');
            $table->timestamps();

            $table->primary('id');
            
            $table->foreign('periodo_id')
                ->references('id')
                ->on('periodos')
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
        Schema::dropIfExists('dia_laborables');
    }
}
