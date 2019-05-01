<?php

namespace App\Http\Controllers\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Empleados;
use App\Tecnicos;
use App\Usuarios;

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
        $empleados=Empleados::create($resquest->all());
        $empleados->save();
        if ($resquest['tipo_usuario']=='Tecnico') {
            // $datos= Empleados::find($resquest['nombre']);
            
            Tecnicos::create([
                "id"=>$empleados['id'],
                "UsuarioLogin"=>$resquest['email'],
                "Password"=>$resquest['nombre']
            ]);
        }else if($resquest['tipo_usuario']=='Usuario'){
            Usuarios::create([
                "id"=>$empleados['id'],
                "UsuarioLogin"=>$resquest['email'],
                "Password"=>$resquest['nombre'].$resquest['dni']
            ]);
        }


        return;
    }
    public function eliminarEmpleado($id){
        $empleados = Empleados::findOrFail($id);
        // $empleados = Tecnicos::findOrFail($id);
        // $empleados = Usuarios::findOrFail($id);
        $empleados->delete();
    }
}
