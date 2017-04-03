<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiaLaboralesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dia_laborales', function (Blueprint $table) {
            $table->date('id')->unique();
            $table->integer('periodo_id')->unsigned();
            $table->boolean('academico');
            $table->timestamps();
            
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
        Schema::dropIfExists('dia_laborales');
    }
}
