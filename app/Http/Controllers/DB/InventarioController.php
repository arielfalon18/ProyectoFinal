<?php

namespace App\Http\Controllers\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Inventarios;
use App\Empleados;


class InventarioController extends Controller
{   
    public function NewInvenatario(Request $resquest){
        $messages = [
            'nombre.required' => 'El nombre es requerido',
            'tipo.required' =>'Escribe el tipo de inventario requerida',
            'descripcion.required' => 'Selecciona una descripcion requerido',
            'idEmpleado' => 'Selecciona un empleado'
        ];
        $resquest->validate([
            'nombre' =>'required',
            'tipo' =>'required',
            'descripcion' =>'required',
            'idEmpleado' =>'required'
        ],$messages);

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

    //mostrar todos los inventarios
    public function GetInventario(){
        $inventarioALL=Inventarios::get();
        return $inventarioALL;
    }

    //eliminar inventario
    public function EliminarInventario($id){
        $inventario = Inventarios::where('id',$id);
        $inventario->delete();
    }
    
}