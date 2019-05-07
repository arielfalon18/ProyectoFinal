<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Incidencia;

class UsuarioController extends Controller
{
    public function getIndex(){
        
        return view('user.user');

    }
   
}
