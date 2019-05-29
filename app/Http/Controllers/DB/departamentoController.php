<?php

namespace App\Http\Controllers\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Departamento;

class departamentoController extends Controller
{
    public function NEWdepartamento(Request $resquest){
        $messages = [
            'Nombre.required' => 'Departamento requerido',
            'Planta.required' =>'Planta requerida',
            'Edificio.required' => 'Edificio requerido',
            'Nombre.unique' => 'Nombre departamento repetido'
        ];
        $resquest->validate([

            'Nombre' =>'required|unique:departamento,Nombre',
            'Planta' =>'required',
            'Edificio' =>'required'
        ],$messages);

        $Departamento=Departamento::create($resquest->all());
        $Departamento->save();
    }
    public function GetDepartamento(Request $resquest){
        if(isset($resquest['action'])){
            if($resquest['action'] == 'orderbyb'){
                $Departamento=Departamento::modificar($resquest['field'], $resquest['orientation']);
                return $Departamento;
            }else if($resquest['action'] =='basicFilter'){
                $Departamento=Departamento::get();
                return $Departamento;
            }
        }
    }
    
}
