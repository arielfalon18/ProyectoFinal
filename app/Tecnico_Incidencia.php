<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tecnico_Incidencia extends Model
{
    protected $table = 'tecnico_incidencia';
    protected $fillable = ['Id','id_Tecnico','iD_empleado','Id_Incidencia','Id_Departamento'];
    public $timestamps = false;
    
    //Relaciones de tablas 
    //Relacion para tener los datos de incidencia 
    public function MostrarDatosIncidencia(){
        return $this->hasOne('App\Incidencia','id' ,'Id_Incidencia');
    }
    //Relacion para mostrar los datos de tecnico
    public function mostrarTecnico(){
        return $this->hasOne('App\Empleados','id' ,'id_Tecnico');
    }
    //Relacion para mostrar los departamentos que tenemos
    public function mostrarDepartamento(){
        return $this->hasOne('App\Departamento','id' ,'Id_Departamento');
    }
    //Mostrar los datos del empleado
    public function mostrarEmpleado(){
        return $this->hasOne('App\Empleados','id' ,'iD_empleado');
    }
}
