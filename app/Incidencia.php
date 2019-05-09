<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incidencia extends Model
{
    protected $table = 'incidencia';
    protected $fillable = ['id', 'FechaEntrada', 'FechaCierre', 'NombreCategoria', 'Descripcion', 'Imagenes', 'Id_Empleado_usuario', 'Id_Empleado_tecnico', 'Estado', 'Prioridad', 'IdEmpresa'];
    public $timestamps = false;

    public function progreso(){
        // $incidencia = Incidencia::all();

        $incidencias = Incidencia::where('Estado','Progreso')->get();
        return view('user.user')->with('incidencia',$incidencias);
    }
}

    