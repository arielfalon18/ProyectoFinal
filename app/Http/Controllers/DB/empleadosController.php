<?php

namespace App\Http\Controllers\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Empleados;
use Illuminate\Support\Facades\Hash;
use App\Rol;
use App\Departamento;
use App\login;
class empleadosController extends Controller
{
    public function VerEmpreados(Request $request){
        $empleados=Empleados::with('RolE')->paginate(5);
      
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
            'telefono' =>'required',
            'IdDepartamento' =>'required',
            'Idrol' =>'required'
        ]);
        $rol=Rol::where('nombre',$resquest['Idrol'])->get();
        $departamento=Departamento::where('Nombre',$resquest['IdDepartamento'])->get();
        foreach ($rol as $roles) {
            foreach ($departamento as $depart) {
                $empleados=Empleados::create([
                    "nombre"=>$resquest['nombre'],
                    "dni"=>$resquest['dni'],
                    "email"=>$resquest['email'],
                    "telefono"=>$resquest['telefono'],
                    "IdEmpresa"=>$resquest['IdEmpresa'],
                    "IdDepartamento"=>$depart->id,
                    "Idrol"=>$roles->id_R,
                ]);
            }
        }
        $empleados->save();

        //Crear login del empleado 
        $loginU=login::create([
            "id"=>$empleados['id'],
            "usuarioLogin"=>$resquest['email'],
            //De momento 12345 luego se cambia y se codificara la constraseña
            "paswordLogin"=>Hash::make('12345')
        ]);
        $loginU->save();
        
        return;
    }
    public function eliminarEmpleado($id){
        //eliminamos un usuario en la base de datos
        $loginU = login::findOrFail($id);
        $loginU->delete();

        // usuario tecnico de la base de datos 
        // $Tecnico= Tecnicos::findOrFail($id);
        // $Tecnico ->delete();
        // Eliminamos un empleado de la base de datos
        $empleados =Empleados::findOrFail($id);
        $empleados->delete();
    }
}
