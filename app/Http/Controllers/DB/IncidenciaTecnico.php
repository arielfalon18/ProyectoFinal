<?php

namespace App\Http\Controllers\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Tecnico_Incidencia;
use App\Empleados;
use App\Incidencia;

class IncidenciaTecnico extends Controller
{
    //
    public function InsertarAsignatura(Request $resquest){
        $messages = [
            'ITecnicos.required' =>'Selecciona un tecnico'
        ];
        $resquest->validate([
            'ITecnicos' =>'required',
        ],$messages);
        $buscarTecnico=Empleados::where('nombre',$resquest['ITecnicos'])->get();
        foreach ($buscarTecnico as $Tecnico) {
            $Incidencia=Tecnico_Incidencia::create([
                "id_Tecnico"=>$Tecnico->id,
                "iD_empleado"=>$resquest['iD_empleado'],
                "Id_Departamento"=>$resquest['IDepartamento'],
                "Id_Incidencia"=>$resquest['IIncidencia'],
                
            ]);
        }
        $ModificarEstado=Incidencia::find($resquest['IIncidencia']);
        $ModificarEstado->Estado='Progreso';
        $ModificarEstado->save();
        $Incidencia->save();
    }
    public function MostrarIncidenciAsignadas(Request $resquest){
        if(isset($resquest['action'])){
            if($resquest['action'] == 'basicoFiltro'){
                $TencnicoIncidencia=Tecnico_Incidencia::with('MostrarDatosIncidencia','mostrarTecnico','mostrarDepartamento','mostrarEmpleado')
                ->get();
                return $TencnicoIncidencia;
            }else if($resquest['action'] == 'orderbyIncidencia'){
                $TencnicoIncidencia=Tecnico_Incidencia::with('MostrarDatosIncidencia','mostrarTecnico','mostrarDepartamento','mostrarEmpleado')
                ->orderBy($resquest['field'], $resquest['orientation'])->get();
                return $TencnicoIncidencia;
            }
        }
    }
}
