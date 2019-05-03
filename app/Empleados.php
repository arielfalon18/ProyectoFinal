<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Empleados extends Model
{
    protected $table = 'empleados';
    protected $fillable = ['id', 'nombre','dni', 'email','telefono', 'IdEmpresa','IdDepartamento','Idrol'];
    public $timestamps = false;

    //Relacion de muchos a uno
    public function Datos_Empresas(){
        return $this->hasMany(Datos_Empresa::class);
    }
    //Relacion de uno a muchos
    public function RolE(){
        //Nombre del modelo ,,,, id del modelo ,,,, id de la relacion
        return $this->hasOne('App\Rol' ,'id_R' , 'Idrol');
    }

    
}
