<?php

namespace App\Http\Controllers\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Departamento;

class departamentoController extends Controller
{
    public function NEWdepartamento(Request $resquest){
        $this->validate($resquest,[
            'Nombre' =>'required',
            'Planta' =>'required',
            'Edificio' =>'required'
        ]);
        $Departamento=Departamento::create($resquest->all());
        $Departamento->save();
    }
    public function GetDepartamento(){
        $Departamento=Departamento::get();
        return $Departamento;
    }
}
