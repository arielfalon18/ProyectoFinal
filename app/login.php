<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
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
    protected $fillable = ['id','usuarioLogin','paswordLogin','rol','Id_empleado'];
    public $timestamps = false;
    
     /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'paswordLogin',
    ];

}
