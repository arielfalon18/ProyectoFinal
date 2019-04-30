<?php

namespace App\Http\Controllers\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Empleados;

class empleadosController extends Controller
{
    public function VerEmpreados(){
        $empleados=Empleados::all();
        return $empleados;
    }
    public function newEmpleados(Request $resquest){
        $this->validate($resquest,[
            'nombre' =>'required',
            'dni' =>'required',
            'email' =>'required',
            'telefono' =>'required'
        ]);
        Empleados::create($resquest->all());
        return;
    }
    public function eliminarEmpleado($id){
        $empleados = Empleados::findOrFail($id);
        $empleados->delete();
    }
}
