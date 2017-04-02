<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmpleadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('empleados', function (Blueprint $table) {
        $table->increments('id');
        $table->integer('id_cargo')->unsigned();
        $table->integer('id_estado')->unsigned();
        $table->text('nombre');
        $table->text('nombre2');
        $table->text('apellido');
        $table->text('apellido2');
        $table->string('cedula', 15)->unique();
        $table->date('fecha_nacimiento');
        $table->text('direccion');
        $table->text('telefono');
        $table->text('telefono2');
        $table->date('fecha_inicio_institucion');
        $table->integer('anios_servicio_nacional')->unsigned();
        $table->integer('anios_servicio_estadal')->unsigned();
        $table->integer('anios_servicio_municipal')->unsigned();
        $table->integer('anios_servicio_otros')->unsigned();
        $table->text('titulo');
        $table->text('especialidad');
        $table->text('cargo');
        $table->text('codigo');
        $table->text('funcion_ejerce');
        $table->text('nivel_educativo');
        $table->text('centro_operativo_labora');
        $table->integer('numero_horas')->unsigned();
        $table->text('nivel_educativo_atiende');
        $table->double('sueldo_mensual', 15, 8);
        $table->text('turno');
        $table->boolean('estudia_actualmente');
        $table->text('descripcion_estudio');
        $table->text('observacion');
        $table->boolean('copia_ultimo_recibo');
        $table->boolean('copia_cedula');

        $table->timestamps();

        $table->foreign('id_cargo')->references('id')->on('cargos');
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
        Schema::dropIfExists('empleados');
    }
}
