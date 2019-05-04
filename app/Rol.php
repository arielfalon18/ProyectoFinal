<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rol extends Model
{
    protected $table = 'rol';
    protected $fillable = ['id_R', 'nombre'];
    public $timestamps = false;

    //Relacion de muchos a uno
    public function empleados(){
        return $this->hasMany('app\Empleados','Idrol','id_R');
    }
    
}
