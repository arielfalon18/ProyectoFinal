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
            $table->string('FechaCierre')->nullable();
            $table->string('NombreCategoria');
            $table->string('Descripcion');
            $table->string('Imagenes')->nullable();
            $table->integer('Id_Empleado_usuario');
            $table->integer('Id_Empleado_tecnico');
            $table->string('Estado');
            $table->string('Prioridad');

            $table->integer('IdInventario')->unsigned();
            $table->foreign('IdInventario')->references('id')->on('inventarios')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
