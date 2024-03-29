<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Login extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::defaultStringLength(191);
        Schema::create('login', function (Blueprint  $table){
            $table->increments('id');
            $table->string('usuarioLogin');
            $table->string('paswordLogin');
            $table->string('rol');
            $table->integer('Id_empleado')->unsigned();
            $table->foreign('Id_empleado')->references('id')->on('empleados')
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
