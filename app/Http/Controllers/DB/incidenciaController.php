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

    // $messages = [
        //     'nombre.required' => 'El nombre es requerido',
        //     'dni.required' =>'El DNI es requerido',
        //     'email.required' => 'Edificio requerido',
        //     'telefono.required' => 'El telefono es requerido',
        //     'IdDepartamento.required' =>'Seleccione el Id Departamento',
        //     'Idrol.required' => 'Seleccione un tipo de usuario'
    

    public function Nuevo(Request $request){

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
