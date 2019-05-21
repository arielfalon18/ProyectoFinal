<?php

namespace App\Http\Controllers\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Incidencia;
use App\Departamento; 

class incidenciaController extends Controller
{

    

    public function Nuevo(Request $request){

        $messages = [
            'FechaI.required' => 'La fecha es requerida',
            'Descripcion.required' =>'Introduce una pequeña descripción',
            'Prioridad.required' => 'Seleccione la prioridad',
            'idDeparta.required' => 'Seleccione el departamento'
          
        ];
        $request->validate([
            'FechaI' => 'required',
            'Descripcion' => 'required',
            'Prioridad' => 'required',
            'idDeparta' => 'required'
           
        ],$messages);

        $departamento=Departamento::where('Nombre',$request['idDeparta'])->get();
        
        foreach ($departamento as $depart) {
            $incidencia=Incidencia::create([
                "FechaEntrada"=>$request['FechaI'],
                "FechaCierre"=>'28/01/2012',
                "IdDepartamento"=>$depart->id,
                "Descripcion"=>$request['Descripcion'],
                "Imagenes"=>$request['Imagen'],
                "Id_Empleado_usuario"=>$request['idEmple'],
                "Estado"=>'Pendiente',
                "Prioridad"=>$request['Prioridad'],
                "Id_Empresa"=>$request['idEmpre'],
            ]);
            $incidencia->save();
        };
        
    }
        

    

    
    
}
