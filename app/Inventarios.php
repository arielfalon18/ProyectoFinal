<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventarios extends Model
{
    protected $table = 'inventarios';
    protected $fillable = ['id', 'nombre','tipo', 'descripcion','idEmpresa','idEmpleado'];
    public $timestamps = false;
}