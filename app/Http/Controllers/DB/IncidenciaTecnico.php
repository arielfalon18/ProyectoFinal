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
        $buscarTecnico=Empleados::where('nombre',$resquest['ITecnico'])->get();
        foreach ($buscarTecnico as $Tecnico) {
            $Incidencia=Tecnico_Incidencia::create([
                "id_Tecnico"=>$Tecnico->id,
                "Id_Departamento"=>$resquest['IDepartamento'],
                "Id_Incidencia"=>$resquest['IIncidencia'],
            ]);
        }
        $ModificarEstado=Incidencia::find($resquest['IIncidencia']);
        $ModificarEstado->Estado='Progreso';
        $ModificarEstado->save();
        $Incidencia->save();
    }
    public function MostrarIncidenciAsignadas(){
        $TencnicoIncidencia=Tecnico_Incidencia::get('Id_Incidencia');
        return $TencnicoIncidencia;
    }
}
