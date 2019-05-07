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
        $messages = [
            'nombre.required' => 'Agrega el nombre',
            'cif.required' =>'El nombre del estudiante no puede ser mayor a :max caracteres.',
            'direccion.required' => 'Agregar la direccion',
            'telefono.required' => 'La puntuación debe ser un número',
            'ciudad.required' => 'Ciudad necesario',
            'pais.required' => 'Pais necesario',
            'codigoP.required' => 'Codigo postal necesario',
            'email.required' => 'Email necesario',
            'password.required' => 'Contraseña necesaria'
        ];
        $resquest->validate([
            'nombre'=>'required',
            'cif'=>'required',
            'direccion'=>'required',
            'telefono'=>'required',
            'ciudad'=>'required',
            'pais'=>'required',
            'codigoP'=>'required',
            'email'=>'required',
            'password'=>'required',
        ],$messages);
        
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
