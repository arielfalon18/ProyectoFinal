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
            $table->string('dirrecion');
            $table->string('Cif');
            $table->string('nombre');
            $table->string('Cif');
            $table->string('nombre');
            $table->string('Cif');
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
