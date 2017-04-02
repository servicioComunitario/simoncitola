<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('estado_id')->unsigned();
            $table->text('nombre');
            $table->text('nombre2')->nullable();
            $table->text('apellido');
            $table->text('apellido2')->nullable();
            $table->string('cedula', 15)->unique();
            $table->text('lugar_nacimiento');
            $table->date('fecha_nacimiento');
            $table->text('direccion');
            $table->timestamps();

            $table->foreign('estado_id')
                ->references('id')
                ->on('estados')
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
        Schema::dropIfExists('alumnos');
    }
}
