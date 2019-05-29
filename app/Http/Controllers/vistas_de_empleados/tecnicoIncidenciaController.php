<?php

namespace App\Http\Controllers\vistas_de_empleados;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Incidencia;
use App\TecnicoContador;
use App\respuestatecnico;
use App\historial;

                 
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
        $mesajes=[
            'DescripcionRespuesta.required'=> 'Porfavor escriba una respuesta',
            'Respuesta.required'=> 'Seleccione un estado',
            'aceptarIncidencia.accepted'=> 'Acepte la condicion'
        ];
        $resquest->validate([
            'DescripcionRespuesta'=>'required',
            'Respuesta'=>'required',
            'aceptarIncidencia'=>'accepted',
        ],$mesajes);
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
            //Crear historial
            $historial=historial::create([
                "id_incidencia"=> $resquest['Id_incidencia'],
                "id_Usuario"=>$resquest['IdTecnico']
            ]);
            $historial->save();

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
            //Crear historial
            $historial= historial::create([
                "id_incidencia"=> $resquest['Id_incidencia'],
                "id_Usuario"=>$resquest['IdTecnico']
            ]);
            $historial->save();
        }
        
    }
    //mostrar descripcion tecnico

    public function mostrarDescTec(){
        $DescTecnico=respuestatecnico::get();
        return $DescTecnico;
    }
}
