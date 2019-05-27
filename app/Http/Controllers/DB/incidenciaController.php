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
            
            $incidencia=new Incidencia;
            $incidencia->FechaEntrada=$request['FechaI'];
            $incidencia->FechaCierre='NULL';
            $incidencia->IdDepartamento=$depart->id;
            $incidencia->Descripcion=$request['Descripcion'];
            $incidencia->Id_Empleado_usuario=$request['idEmple'];

            if($request['Imagen']==true){
                $exploded=explode(',',$request['Imagen']);
                $decode=base64_decode($exploded[1]);
                if(str_contains($exploded[0],'jpeg')){
                    $extension='jpg';
                }
                else{
                    $extension='png';
                }
                $name=str_random().'.'.$extension;
                $path=public_path().'/media/ImagenesDeIncidencia/'.$name;
                file_put_contents($path,$decode);
                $incidencia->Imagenes=$name;
            }else{
                $incidencia->Imagenes='NULL';
            }
            
            $incidencia->Estado='Pendiente';
            $incidencia->Prioridad=$request['Prioridad'];
            $incidencia->Id_Empresa=$request['idEmpre'];
             
            $incidencia->save();    
        };
    }
}
