<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Departamento extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('Departamento', function (Blueprint  $table){
            $table->increments('id');
            $table->string('Nombre');
            $table->string('Planta');
            $table->string('Edificio');
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
