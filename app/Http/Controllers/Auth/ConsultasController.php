<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Datos_empresa;
use Mail;
use SendMail;
class ConsultasController extends Controller
{
    public function nuevoR(Request $resquest)
    {
        
        // $Datos_Empresa = new Datos_empresa;
        // $Datos_Empresa->nombre = request('nombre');
        // $Datos_Empresa->cif = request('cif');
        // $Datos_Empresa->direccion = request('direccion');
        // $Datos_Empresa->telefono = request('telefono');
        // $Datos_Empresa->ciudad = request('ciudad');
        // $Datos_Empresa->pais = request('pais');
        // $Datos_Empresa->codigoP = request('codigoP');
        // $Datos_Empresa->email = request('email');
        // $Datos_Empresa->password = Hash::make('123456789');
        // $Datos_Empresa->save();
        // return redirect('/');
        // Hash::make(request('password'));
        $datos_empresa=Datos_empresa::create([
            'nombre'=>$resquest['nombre'],
            'cif'=>$resquest['cif'],
            'direccion'=>$resquest['direccion'],
            'telefono'=>$resquest['telefono'],
            'ciudad'=>$resquest['ciudad'],
            'pais'=>$resquest['pais'],
            'codigoP'=>$resquest['codigoP'],
            'email'=>$resquest['email'],
            'password'=>Hash::make($resquest['password']),
        ]);
        $datos_empresa->save();
        // theincidence.19@gmail.com
        // Barcelona_12
        $correoEnviar=$datos_empresa['email'];
        $datos = array('Nombre'=>$resquest['nombre'] ,'contraseña'=>$resquest['password'],'email'=>$resquest['email']);
        Mail::send('email.contactos',$datos, function($msj) use ($correoEnviar){
            $msj->to($correoEnviar,"theincidence");
            $msj->subject("Envio de datos cuenta");
            $msj->from('heincidence.19@gmail.com',"theinciden");
        });
        return;
    }
}
