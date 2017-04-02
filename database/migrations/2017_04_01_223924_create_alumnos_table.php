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
        $table->integer('id_estado')->unsigned();
        $table->text('nombre');
        $table->text('nombre2');
        $table->text('apellido');
        $table->text('apellido2');
        $table->string('cedula', 15)->unique();
        $table->text('lugar_nacimiento');
        $table->date('fecha_nacimiento');
        $table->text('direccion');
        $table->timestamps();

        // $table->unique('cedula', 'alumnos_cedula_uniq');
      });

      Schema::table('alumnos', function (Blueprint $table) {
        // $table->foreign('id_estado')->references('id')->on('estados')->onDelete('cascade');
        $table->foreign('id_estado')->references('id')->on('estados');
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
