<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\erroresbase;
use Mail;
use SendMail;

class ControladorErroresBase extends Controller
{
    public function erroresNotificar(Request $resquest){
        $resquest->validate([
            'mensaje' =>'required'
        ]);
        $crearError=erroresbase::create([
            'Motivo'=> $resquest['mensaje'],
            'CorreoCliente'=>$resquest['emailError']
        ]);
        $crearError->save();
        //Enviar un correo a nostros mismos desde este correo de la base de datos 
        $correoEnviar=$crearError['CorreoCliente'];;
        $datos = array('mensaje'=>$resquest['mensaje'],'email'=>$resquest['emailError']);
        Mail::send('email.errores',$datos, function($msj) use ($correoEnviar){
            $msj->to('theincidence.19@gmail.com',"theincidence");
            $msj->subject("Envio Errores de aplicacion");
            $msj->from($correoEnviar,"theinciden");
        });
        return;
    }
}
