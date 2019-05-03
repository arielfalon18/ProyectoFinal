<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    protected $table = 'departamento';
    protected $fillable = ['id', 'Nombre','Planta', 'Edificio','IdEmpresa'];
    public $timestamps = false;
}
