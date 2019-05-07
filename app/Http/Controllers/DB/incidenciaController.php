<?php

namespace App\Http\Controllers\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Incidencia;
use Carbon\Carbon;
use App\Empleados;

class incidenciaController extends Controller
{
    public function newIncidencia (Request $request){
        $empl_usu = Empleados::where('nombre',$request['Id_Empleado_usuario'])->get();
        $incidencia = new Incidencia;
        $incidencia->FechaEntrada=request('FechaI');
        $incidencia->FechaCierre=request('FechaC');
        $incidencia->NombreCategoria=request('Categoria');
        $incidencia->Descripcion=request('Descripcion');
        $incidencia->Imagenes=request('Imagen');
        $incidencia->Id_Empleado_usuario=$empl_usu;
        $incidencia->Id_Empleado_tecnico='145';
        $incidencia->Estado='Pendiente';
        $incidencia->Prioridad=request('Prioridad');
        $incidencia->IdEmpresa=1;
        
        $incidencia->save();
        //return $request->all();
        
        // $incidencia=Incidencia::create($request->all());
        // $incidencia->save();


        // $this->validate($request,[
        //     'NombreCategoria'=>'requiered',
        //     'Descripcion'=>'requiered',
        //     'Prioridad'=>'requiered',
        //     'Imagenes'=>'requiered',
        // ]);
     
        // $incidencia= Incidencia::create([
        //     "FechaEntrada"=>'07/05/2019',
        //     "FechaCierre"=>'07/06/2019',
        //     "NombreCategoria"=>,
        //     "Descripcion"=>$request['Descripcion'],
        //     "Imagenes"=>$request['Imagenes'],
        //     "Id_Empleado_usuario"=>'154',
        //     "Id_Empleado_tecnico"=>'10',
        //     "Estado"=>'Prueba',
        //     "Prioridad"=>$request['Prioridad'],
        //     "IdEmpresa"=>$request['idEmpresa'],
        // ]);
        // $incidencia->save();
    }
}
