<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    protected $table = 'incidencia';
    protected $fillable = ['id', 'FechaEntrada', 'FechaCierre', 'IdDepartamento', 'Descripcion', 'Imagenes', 'Id_Empleado_usuario', 'Estado', 'Prioridad', 'IdEmpresa'];
    public $timestamps = false;

   
}

    