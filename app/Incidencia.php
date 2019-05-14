<?php

namespace App;
use App\Departamento;
use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    protected $table = 'incidencia';
    protected $fillable = ['id', 'FechaEntrada', 'FechaCierre', 'IdDepartamento', 'Descripcion', 'Imagenes', 'Id_Empleado_usuario', 'Estado', 'Prioridad', 'IdEmpresa'];
    public $timestamps = false;

    //relacion con departamento     
    public function departamentosGet(){
        return $this->belongsToMany('App\Departamentos','id','IdDepartamento');
    }
   
}

