<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepresentantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representantes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parentesco_id')->unsigned();
            $table->text('nombre');
            $table->text('nombre2')->nullable();
            $table->text('apellido');
            $table->text('apellido2')->nullable();
            $table->string('cedula', 15)->unique();
            $table->date('fecha_nacimiento');
            $table->text('ocupacion');
            $table->text('direccion_trabajo')->nullable();
            $table->text('telefono');
            $table->text('telefono2')->nullable();

            $table->timestamps();

            $table->foreign('parentesco_id')
                ->references('id')
                ->on('parentescos')
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
        Schema::dropIfExists('representantes');
    }
}
