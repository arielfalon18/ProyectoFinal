<?php

namespace App\Http\Controllers\vistas_de_empleados;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Incidencia;
use App\TecnicoContador;
use App\respuestatecnico;

                 
class tecnicoIncidenciaController extends Controller
{
    //
    public function getIncideciasP(){
        $IncidenciasT=Incidencia::with('NombresEmpleado','departamentosGet')->get();
        return $IncidenciasT;

//         $incidencia=Incidencia::select('*')
//         ->where('asas',$_REQUEST['asdas'])
//         ->get();

// return $incidencia;
    }
    public function mostrarTecnicoIm(){
        $datosContadorTecnico=TecnicoContador::get();
        return $datosContadorTecnico;
    }

    //Cancelar incidencia 
    public function AsignarRespuesta(Request $resquest){
        if($resquest['Respuesta']=='Cancelada'){
            $CrearRespuesta= respuestatecnico::create([
                "Descripcion"=>$resquest['DescripcionRespuesta'],
                "Id_incidencia"=>$resquest['Id_incidencia'],
                "id_tecnico"=>$resquest['IdTecnico']
            ]);
            $CrearRespuesta->save();
            $modificarEstado=Incidencia::find($resquest['Id_incidencia']);
            $modificarEstado->Estado='Cancelada';
            $modificarEstado->FechaCierre=$resquest['HoraFinal'];
            $modificarEstado->save();
            
        }else if($resquest['Respuesta']=='Finalizada'){
            $CrearRespuesta= respuestatecnico::create([
                "Descripcion"=>$resquest['DescripcionRespuesta'],
                "Id_incidencia"=>$resquest['Id_incidencia'],
                "id_tecnico"=>$resquest['IdTecnico']
            ]);
            $CrearRespuesta->save();
            $modificarEstado=Incidencia::find($resquest['Id_incidencia']);
            $modificarEstado->Estado='Finalizada';
            $modificarEstado->FechaCierre=$resquest['HoraFinal'];
            $modificarEstado->save();
        }
        
    }
    //mostrar descripcion tecnico

    public function mostrarDescTec(){
        $DescTecnico=respuestatecnico::get();
        return $DescTecnico;
    }
}
