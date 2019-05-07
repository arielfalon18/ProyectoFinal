<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Empleado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('Empleados', function (Blueprint  $table){
            $table->increments('id');
            $table->string('nombre');
            $table->string('dni');
            $table->string('email');
            $table->integer('telefono');
            // $table->string('tipo_usuario');
            $table->integer('IdEmpresa')->unsigned();
            $table->integer('IdDepartamento')->unsigned();
            $table->string('Rol');
            $table->foreign('IdEmpresa')->references('id')->on('Datos_Empresa')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            //De momento no se puede ejecutar las relaciones de este modo 
            //porque cuando haces la migrte no te lo hace de orden directo te lo hace
            //orden 1 por 1 y no te lo hace de forma que te coja el valor primero la tabla empleado.
            
            // $table->foreign('IdDepartamento')->references('id')->on('Departamento')
            //     ->onDelete('cascade')
            //     ->onUpdate('cascade');
            // $table->foreign('Idrol')->references('id')->on('rol')
            // ->onDelete('cascade')
            // ->onDelete('cascade');
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
