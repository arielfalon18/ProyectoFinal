<?php

namespace App\Http\Controllers\vistas_de_empleados;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Incidencia;

class tecnicoIncidenciaController extends Controller
{
    //
    public function getIncideciasP(){
        $IncidenciasT=Incidencia::with('NombresEmpleado')->get();
        return $IncidenciasT;
    }
}
