<?php

namespace App\Http\Controllers\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Inventarios;
use App\Datos_empresa;
use App\Empleados;

class InventarioController extends Controller
{
    public function NewInvenatario(Request $resquest){
    
        $empleado=Empleados::where('')    ;
        $empleados=Empleados::where('',$resquest['IdDepartamento'])->get();
    
        $inventario = new Inventarios;  
        $inventario->nombre=request('nombreI');
        $inventario->tipo=request('tipoI');
        $inventario->descripcion=request('DescripcionI');
        $inventario->idEmpresa
        $inventario->idEmpleado=1;
        $inventario->save();
    }
    
}