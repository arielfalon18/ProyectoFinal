<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    protected $table = 'incidencia';
    protected $fillable = ['id', 'FechaEntrada', 'FechaCierre', 'NombreCategoria', 'Descripcion', 'Imagenes', 'Id_Empleado_usuario', 'Id_Empleado_tecnico', 'Estado', 'Prioridad', 'IdEmpresa'];
    public $timestamps = false;
}
