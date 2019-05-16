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
        return view('user.user');
    }
    
}
