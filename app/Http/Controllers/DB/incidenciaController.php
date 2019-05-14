<?php

namespace App\Http\Controllers\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Incidencia;
use Carbon\Carbon;
use App\Departamento;   


class incidenciaController extends Controller
{

    

    public function newIncidencia (Request $request){
        // $messages = [
        //     'nombre.required' => 'El nombre es requerido',
        //     'dni.required' =>'El DNI es requerido',
        //     'email.required' => 'Edificio requerido',
        //     'telefono.required' => 'El telefono es requerido',
        //     'IdDepartamento.required' =>'Seleccione el Id Departamento',
        //     'Idrol.required' => 'Seleccione un tipo de usuario'

        // ];
        // $request->validate([
        //     'Categoria' => 'requiered',
        //     'Descripcion' => 'requiered',
        //     'Prioridad' => 'requiered'
        // ],$messages);
        // $departamento=Departamento::where('Nombre'['IdDepartamento'])->get();
        // foreach ($departamento as $depart) {
            $incidencia = new Incidencia;
            $incidencia->FechaEntrada=request('FechaI');
            $incidencia->FechaCierre=request('FechaC');
            $incidencia->IdDepartamento='1';
            $incidencia->Descripcion=request('Descripcion');
            $incidencia->Imagenes=request('Imagen');
            $incidencia->Id_Empleado_usuario='154';
            $incidencia->Estado='Pendiente';
            $incidencia->Prioridad=request('Prioridad');
            $incidencia->IdInventario=1;
        // }
        //guadamos los datos en la BBDD
        $incidencia->save();
        return view('user');
    }
        public function getIncidencias(){
            $incidencia=Incidencia::with('departamentosGet')->get();
            dd($incidencia);
        }

    public function GetDepartamentos(){
        $departamentos = Departamento::get();
        return view('user', compact("departamentos"));
    }

    
    
}
