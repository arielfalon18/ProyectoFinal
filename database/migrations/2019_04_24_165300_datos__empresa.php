<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DatosEmpresa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('Datos_Empresa', function (Blueprint  $table){
            $table->increments('id');
            $table->string('nombre');
            $table->string('cif');
            $table->string('direccion');
            $table->string('ciudad');
            $table->string('pais');
            $table->string('codigoP');
            $table->integer('telefono');
            $table->string('email');
            $table->string('password');
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
