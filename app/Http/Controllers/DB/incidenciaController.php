<?php

namespace App\Http\Controllers\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Incidencia;
use Carbon\Carbon;
use App\Departamento;   


class incidenciaController extends Controller
{

    

    public function newIncidencia (Request $request){
        // $messages = [
        //     'nombre.required' => 'El nombre es requerido',
        //     'dni.required' =>'El DNI es requerido',
        //     'email.required' => 'Edificio requerido',
        //     'telefono.required' => 'El telefono es requerido',
        //     'IdDepartamento.required' =>'Seleccione el Id Departamento',
        //     'Idrol.required' => 'Seleccione un tipo de usuario'

        // ];
        // $request->validate([
        //     'Categoria' => 'requiered',
        //     'Descripcion' => 'requiered',
        //     'Prioridad' => 'requiered'
        // ],$messages);
        
            $incidencia = new Incidencia;
            $incidencia->FechaEntrada=request('FechaI');
            $incidencia->FechaCierre=request('FechaC');
            $incidencia->IdDepartamento='1';
            $incidencia->Descripcion=request('Descripcion');
            $incidencia->Imagenes=request('Imagen');
            $incidencia->Id_Empleado_usuario='154';
            $incidencia->Estado='Pendiente';
            $incidencia->Prioridad=request('Prioridad');
            $incidencia->Id_Empresa=1;
        
        //guadamos los datos en la BBDD
        $incidencia->save();

        $departament = Departamento::all();
        return view('user')->with('departament',$departament);
    }
        

    

    
    
}
