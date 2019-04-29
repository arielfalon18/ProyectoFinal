<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Datos_empresa;

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
        Datos_empresa::create([
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
        return;
    }
}
