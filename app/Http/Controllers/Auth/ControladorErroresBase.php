<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\erroresbase;

class ControladorErroresBase extends Controller
{
    public function erroresNotificar(Request $resquest){
        $crearError=erroresbase::create([
            'Motivo'=> $resquest['mensaje'],
            'CorreoCliente'=>$resquest['emailError']
        ]);
        $crearError->save();
        //Enviar un correo a nostros mismos desde este correo de la base de datos 
        
    }
}
