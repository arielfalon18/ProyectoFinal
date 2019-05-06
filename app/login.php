<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Datos_empresa extends Authenticatable
{
    //
    //Creamos el modelo de login para que pueda pillar los datos de la base de datos 
    protected $table = 'login';
    protected $fillable = ['id', 'usuarioLogin','paswordLogin'];
    public $timestamps = false;
    
}
