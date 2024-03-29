<?php

namespace App\Http\Controllers\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Empleados;
use Illuminate\Support\Facades\Hash;
use App\Departamento;
use App\login;
class empleadosController extends Controller
{
    public function VerEmpreados(Request $resquest){
        $empleados=Empleados::with('Departamentos')->orderBy('id','Asc')->paginate(5);
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
        $messages = [
            'nombre.required' => 'El nombre es requerido',
            'dni.required' =>'El DNI es requerido',
            'dni.unique' => 'El DNI debe de ser unico',
            'dni.max' => 'El DNI no puede tener mas de 9',
            'dni.min' => 'No es un DNI',
            'email.required' => 'Edificio requerido',
            'email.email'=>'Tiene que ser un correo',
            'telefono.required' => 'El telefono es requerido',
            'telefono.max'=>'El telefono no puede ser mas de 9',
            'telefono.min'=>'No es formato telefono',
            'telefono.unique' => 'El telefono debe ser unico',
            'IdDepartamento.required' =>'Seleccione el Id Departamento',
            'Idrol.required' => 'Seleccione un tipo de usuario'

        ];
        $resquest->validate([
            'nombre' =>'required',
            'dni' =>'required|unique:empleados,dni|max:9|min:9',
            'email' =>'required|unique:empleados,email|email',
            'telefono' =>'required|unique:empleados,telefono|max:9|min:9',
            'IdDepartamento' =>'required',
            'Idrol' =>'required'
        ],$messages);
        $departamento=Departamento::where('Nombre',$resquest['IdDepartamento'])->get();
            foreach ($departamento as $depart) {
                $empleados=Empleados::create([
                    "nombre"=>$resquest['nombre'],
                    "dni"=>$resquest['dni'],
                    "email"=>$resquest['email'],
                    "telefono"=>$resquest['telefono'],
                    "IdEmpresa"=>$resquest['IdEmpresa'],
                    "IdDepartamento"=>$depart->id,
                    "Rol"=>$resquest['Idrol'],
                    "Foto"=>"null",
                ]);
            }
        
        $empleados->save();

        //Crear login del empleado 
        $loginU=login::create([
            "email"=>$resquest['email'],
            //De momento 12345 luego se cambia y se codificara la constraseña
            "password"=>Hash::make('12345'),
            "rol"=>$resquest['Idrol'],
            "Id_empleado"=>$empleados['id'],
            "Id_Empresa"=>$resquest['IdEmpresa'],
            "Id_Departamento"=>$empleados->IdDepartamento
        ]);
        $loginU->save();
        
        return;
    }
    public function eliminarEmpleado($id){
        //eliminamos un usuario en la base de datos
        //Buscamos La id de la parte de id_empleado y que elimine la ID 
        $loginU = login::where('Id_empleado',$id);
        $loginU->delete();
        //Eliminamos un empleado de la base de datos con el ID
        $empleados =Empleados::findOrFail($id);
        $empleados->delete();
    }
    

    public function empleadoAll(){
        $EmpleadosALl=Empleados::with('Departamentos')->get();
        return $EmpleadosALl;
    }
}
