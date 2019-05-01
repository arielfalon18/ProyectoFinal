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
        Empleados::create($resquest->all());

        if ($resquest['tipo_usuario']=='Tecnico') {
            Tecnicos::create([
                "id"=>$resquest['id'],
                "UsuarioLogin"=>$resquest['email'],
                "Password"=>$resquest['nombre']
            ]);
        }else if($resquest['tipo_usuario']=='Usuario'){
            Usuarios::create([
                "id"=>5,
                "UsuarioLogin"=>$resquest['email'],
                "Password"=>$resquest['nombre'].$resquest['dni']
            ]);
        }


        return;
    }
    public function eliminarEmpleado($id){
        $empleados = Empleados::findOrFail($id);
        $empleados = Tecnicos::findOrFail($id);
        $empleados = Usuarios::findOrFail($id);
        $empleados->delete();
    }
}
