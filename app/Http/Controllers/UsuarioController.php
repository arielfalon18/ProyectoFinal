<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Incidencia;
use App\Departamento;
use App\Empresa;

class UsuarioController extends Controller
{
    public function __construct(){
        $this->middleware('auth:usuarioL');
    }
    public function getIndex(){
        
        $incidencias = Incidencia::where('Estado','Pendiente')->get();
        $progreso = Incidencia::where('Estado','Progreso')->get();
        $finalizada = Incidencia::where('Estado','Finalizada')->get();
        $cancelada = Incidencia::where('Estado','Cancelada')->get();
   
        return view('user.user')->with('incidencia',$incidencias)
        ->with('progreso',$progreso)->with('finalizada',$finalizada)
        ->with('cancelada',$cancelada);

    }
    
}
