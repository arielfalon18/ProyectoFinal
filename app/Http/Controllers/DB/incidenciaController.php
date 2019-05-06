<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class incidenciaController extends Controller
{
    public function newIncidencia (Request $request){
        $this->validate($request,[
            'FechaEntrada',
            'FechaCierre',
            'NombreCategoria',
            'Descripcion',
            'Imagenes',
        ]);
        $incidencia= Incidencia::create([
            "FechaEntrada"=>$request['FechaEntrada'],
            "FechaCierre"=>$request['FechaCierre'],
            "NombreCategoria"=>$request['NombreCategoria'],
            "Descripcion"=>$request['Descripcion'],
            "Imagenes"=>$request['Imagenes'],
        ]);
        $incidencia->save();
    }
}