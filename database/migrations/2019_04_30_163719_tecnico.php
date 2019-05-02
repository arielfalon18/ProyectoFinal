<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Tecnico extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('Tecnico', function (Blueprint  $table){
            $table->integer('id')->unsigned()->primary();
            $table->string('UsuarioLogin');
            $table->string('Password');
            $table->foreign('id')->references('id')->on('empleados')
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
        Schema::drop('Tecnico');
    }
}
