<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Incidencia;

class UsuarioController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function getIndex(){
        $incidencia = Incidencia::all();
        
        dd($incidencia);

        return view('user.user')
        ->with('incidencia',$incidencia);

        
        // return view('user.user');

    }

    // public function getIncidencia(){
    //     $incidencias = Incidencia::all();
    //     return view('user.user')->with('user',$incidencias);
    // }
}
