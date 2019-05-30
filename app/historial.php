<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class historial extends Model
{
    //
    protected $table = 'historial';
    protected $fillable = ['id','id_Incidencia','id_Tecnico','ID_usuario'];
    public $timestamps = false;

    //Relacion para mostrar los datos de la incidencia que tiene en el historial
    public function incidenciaId(){
        return $this->hasOne('App\Incidencia' ,'id','id_incidencia');
    }
}
