<?php

namespace App\Http\Controllers\vistas_de_empleados;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Incidencia;
use App\Departamento;
use App\TecnicoContador;

class tecnicoIncidenciaController extends Controller
{
    //
    public function getIncideciasP(){
        $IncidenciasT=Incidencia::with('NombresEmpleado','departamentosGet')->get();
        return $IncidenciasT;

//         $incidencia=Incidencia::select('*')
//         ->where('asas',$_REQUEST['asdas'])
//         ->get();

// return $incidencia;

    }
    public function mostrarTecnicoIm(){
        $datosContadorTecnico=Incidencia::get();
        return $datosContadorTecnico;
    }
}
