<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class inicio extends Controller
{
    public function getIndex(){
        
        return view('inicio');
        
    }
    public function getFormulario(){
        return view('vistas.FormularioLogin');
    }

}
