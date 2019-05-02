<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    protected $table = 'empleados';
    protected $fillable = ['id', 'nombre','dni', 'email','telefono', 'tipo_usuario','IdEmpresa'];
    public $timestamps = false;

    //Relacion de muchos a uno
    public function Datos_Empresas(){
        return $this->hasMany(Datos_Empresa::class);
    }

    
}
