<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Incidencia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::defaultStringLength(191);
        Schema::create('Incidencia', function (Blueprint  $table){
            $table->increments('id');
            $table->string('FechaEntrada');
            $table->string('FechaCierre');
            $table->string('NombreCategoria');
            $table->string('Descripcion');
            $table->string('Imagenes');
            $table->integer('Id_Empleado_usuario');
            $table->integer('Id_Empleado_tecnico');
            $table->string('NombrePrioridad');
            $table->string('Estado');
            $table->string('Prioridad');

            $table->integer('IdEmpresa')->unsigned();
            $table->foreign('IdEmpresa')->references('id')->on('Datos_Empresa')
                ->onDelete('cascade')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
