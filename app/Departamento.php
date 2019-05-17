<?php

namespace App;
use App\Incidencia;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamento';
    protected $fillable = ['id', 'Nombre','Planta', 'Edificio','IdEmpresa'];
    public $timestamps = false;


    //relacion con incidencia
    // public function incidenias(){
    //     return $this->belongsToMany('App\Incidencia');
    // }
}
