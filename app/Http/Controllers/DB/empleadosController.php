<?php

namespace App\Http\Controllers\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Empleados;
use App\Tecnicos;
use App\Usuarios;

class empleadosController extends Controller
{
    public function VerEmpreados(Request $request){
        $empleados=Empleados::orderBy('id','ASC')->paginate(5);
        //Paginacion de empleados de la tabla
        return [
            'pagination' =>[
                'total'         =>$empleados->total(),
                'current_page'  =>$empleados->currentPage(),
                'per_page'      =>$empleados->perPage(),
                'last_page'     =>$empleados->lastPage(),
                'from'          =>$empleados->firstItem(),
                'to'            =>$empleados->lastItem(),
            ],
            'empleados' =>$empleados
        ];
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
        // eliminamos un usuario en la base de datos
        $usuario = Usuarios::findOrFail($id);
        $usuario->delete();

        // usuario tecnico de la base de datos 
        // $Tecnico= Tecnicos::findOrFail($id);
        // $Tecnico ->delete();
        // Eliminamos un empleado de la base de datos
        $empleados =Empleados::findOrFail($id);
        $empleados->delete();
    }
}
