<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->integer('rol_id')->index();
            $table->integer('empleado_id')->index();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('rol_id')
                ->references('id')->on('roles')
                ->onUpdate('cascade')
                ->onDelete('restrict');

            $table->foreign('empleado_id')
                ->references('id')->on('empleados')
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
        Schema::dropIfExists('users');
    }
}