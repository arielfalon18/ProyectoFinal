<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class login extends Authenticatable
{
    
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    //
    //Creamos el modelo de login para que pueda pillar los datos de la base de datos 
    protected $guard ='usuarioL';
    protected $table = 'login';
    protected $fillable = ['id','email','password','rol','Id_empleado','Id_Empresa','Id_Departamento'];
    public $timestamps = false;
    
     /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

}
