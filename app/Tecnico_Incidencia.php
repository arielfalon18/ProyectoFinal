<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tecnico_Incidencia extends Model
{
    protected $table = 'tecnico_incidencia';
    protected $fillable = ['Id','id_Tecnico','Id_Incidencia','Id_Departamento'];
    public $timestamps = false;
    
    //Relaciones de tablas 
    public function MostrarDatosIncidencia(){
        return $this->hasOne('App\Incidencia','id' ,'Id_Incidencia');
    }
}
