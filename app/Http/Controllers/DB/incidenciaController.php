<?php

namespace App\Http\Controllers\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Incidencia;
use App\Departamento;
use Illuminate\Support\Facades\Storage;

class incidenciaController extends Controller
{

    public function store(Request $request){
        

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

            // if ($request->file('Imagen')) {
            //     $file = $request->file($request['Imagen']);
            //     $name = time().$file->getClientOriginalName();
            //     $file->move(public_path().'/mediaD/', $name);
            //     echo $name;
            // }
            
            /**
             * TODAVIA NO FUNCIONA EL AÑADIR IMAGEN EN LA CARPETA PUBLIC
             * DEL PROYECTO!!!!!!!!!!!!!!!!!!!!
             */
            $incidencia=Incidencia::create([
                "FechaEntrada"=>$request['FechaI'],
                "FechaCierre"=>'NULL',
                "IdDepartamento"=>$depart->id,
                "Descripcion"=>$request['Descripcion'],
                "Imagenes" => $request['Imagen'], //$name,
                "Id_Empleado_usuario"=>$request['idEmple'],
                "Estado"=>'Pendiente',
                "Prioridad"=>$request['Prioridad'],
                "Id_Empresa"=>$request['idEmpre'],
            ]);    
            $incidencia->save();    
        };
        
    }
}
