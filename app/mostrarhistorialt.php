<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mostrarhistorialt extends Model
{
    //
    protected $table = 'mostrarhistorialt';
    protected $fillable = ['id','descripcionIncidencia','nombre_usuario','nombreTecnico','descripcionTecnico','Prioridad','idEmpresa'.'IdDepartamento'];
    public $timestamps = false;

}
