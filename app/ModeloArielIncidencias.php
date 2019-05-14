<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ModeloArielIncidencias extends Model
{
    //
    protected $table = 'incidencia';
    protected $fillable = ['id', 'FechaEntrada', 'FechaCierre', 'Id_Departamento', 'Descripcion', 'Imagenes', 'Id_Empleado_usuario','Estado', 'Prioridad', 'IdInventario'];
    public $timestamps = false;

    
}

