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
            $table->integer('id_parentesco')->unsigned();
            $table->text('nombre');
            $table->text('nombre2');
            $table->text('apellido');
            $table->text('apellido2');
            $table->string('cedula', 15)->unique();
            $table->date('fecha_nacimiento');
            $table->text('ocupacion');
            $table->text('direccion_trabajo');
            $table->text('telefono');
            $table->text('telefono2');

            $table->timestamps();

            $table->foreign('id_parentesco')->references('id')->on('parentescos');            
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
