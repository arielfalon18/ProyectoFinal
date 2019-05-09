<?php

namespace App\Http\Controllers\vistas_de_empleados;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class tecnicoController extends Controller
{
    //

    public function getIndex(){
        return view('user.tecnico');
    }
}
