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

   

    public function newIncidencia (Request $request){
        $departamento=Departamento::all();
        $empleado=Empleados::all();
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
        $departamento=Departamento::where('Nombre',$request['IdDepartamento'])->get();
        $empleado = Empleados::where('Nombre',$request['Id_Empleado_usuario'])->get();
        //dd($request);
        //dd($departamento);
        foreach ($departamento as $depart) {
            foreach ($empleado as $empl) {
                // $incidencia=Incidencia::create([
                //     "FechaEntrada"=>$request['FechaEntrada'],
                //     "FechaCierre"=>$request['FechaCierre'],
                //     "IdDepartamento"=>$depart->id,
                //     "Descripcion"=>$request['Descripcion'],
                //     "Imagenes"=>$request['Imagenes'],
                //     "Id_Empleado_usuario"=>$empl->id,
                //     "Estado"=>'Pendiente',
                //     "Prioridad"=>$request['Prioridad'],
                //     "Id_Empresa"=>1,
                // ]);
                $incidencia = new Incidencia;
                $incidencia->FechaEntrada=request('FechaI');
                $incidencia->FechaCierre=request('FechaC');
                $incidencia->IdDepartamento=$depart->id;
                $incidencia->Descripcion=request('Descripcion');
                $incidencia->Imagenes=request('Imagen');
                $incidencia->Id_Empleado_usuario=$empl->id;
                $incidencia->Estado='Pendiente';
                $incidencia->Prioridad=request('Prioridad');
                $incidencia->Id_Empresa=3;

           }
            //guadamos los datos en la BBDD
            $incidencia->save();
       }
        
        return redirect('user');

        
    }
        

    

    
    
}
