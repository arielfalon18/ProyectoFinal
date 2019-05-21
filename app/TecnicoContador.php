<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TecnicoContador extends Model
{
    //
    protected $table = 'contadortecnico';
    protected $fillable = ['id','nombre','Rol','IdDepartamento','Contador'];
    public $timestamps = false;
}
