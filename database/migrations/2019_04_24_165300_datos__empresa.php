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
            $table->string('nombre');
            $table->string('cif');
            $table->string('direcion');
            $table->string('telefono');
            $table->string('poblacion');
            $table->string('correo_electronico');
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
