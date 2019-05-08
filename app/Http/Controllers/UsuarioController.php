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
        
        return view('user.user');

    }
   
}
