<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Incidencia;

class UsuarioController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }
    public function getIndex(){
        // $incidencia = Incidencia::all();
        

        // return view('user.user')
        // ->with('incidencia',$incidencia);
        $incidencias = Incidencia::where('Estado','Pendiente')->get();
        return view('user.user')->with('incidencia',$incidencias);

        
        // $incidencia = Incidencia::where('Estado','Progreso')->get();
        // return view('user.user')->with('incidencia',$incidencia);
        //return view('user.user');

    }
    public function scopeProgreso($query){
        return $query->where('Estado','Progreso');
    }

    // public function Pendientes(){
    //     $incidencias = Incidencia::where('Estado','Pendiente');
    //     return view('user.user')->with('incidencia',$incidencias);
    // }
}
