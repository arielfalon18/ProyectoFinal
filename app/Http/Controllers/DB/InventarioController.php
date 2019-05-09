<?php

namespace App\Http\Controllers\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Inventarios;
use App\Empleados;

class InventarioController extends Controller
{   
    public function NewInvenatario(Request $resquest){
        
        // $inventario = new Inventarios;  
        // $inventario->nombre=request('nombreI');
        // $inventario->tipo=request('tipoI');
        // $inventario->descripcion=request('DescripcionI');
        // $inventario->idEmpresa=1;
        // $inventario->idEmpleado=1;
        // $inventario->save();
        $EmpleadoI=Empleados::where('nombre',$resquest['idEmpleado'])->get();
            foreach ($EmpleadoI as $empl) {
                $inventario = Inventarios::create([
                    "nombre"=>$resquest['nombre'],
                    "tipo"=>$resquest['tipo'],
                    "descripcion"=>$resquest['descripcion'],
                    "idEmpresa"=>$resquest['idEmpresa'],
                    "idEmpleado"=>$empl->id,
                ]);
            }
        $inventario->save();
    }

    
}