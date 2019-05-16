<?php

namespace App\Http\Controllers\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Incidencia;
use Carbon\Carbon;
use App\Departamento; 
use App\Empleados;

class incidenciaController extends Controller
{

   
    

    public function Nuevo(Request $request){
        $departamento=Departamento::where('Nombre',$request['idDeparta'])->get();
        foreach ($departamento as $depart) {
            $incidencia=Incidencia::create([
                "FechaEntrada"=>$request['FechaI'],
                "FechaCierre"=>'28/01/2012',
                "IdDepartamento"=>$depart->id,
                "Descripcion"=>$request['Descripcion'],
                "Imagenes"=>$request['Imagen'],
                "Id_Empleado_usuario"=>2,
                "Estado"=>'Pendiente',
                "Prioridad"=>$request['Prioridad'],
                "Id_Empresa"=>1,
            ]);
            $incidencia->save();
        };
        
    }
        

    

    
    
}
