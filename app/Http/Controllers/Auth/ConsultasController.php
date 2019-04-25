<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Datos_empresa;

class ConsultasController extends Controller
{
    public function nuevoR()
    {
        
        $Datos_Empresa = new Datos_empresa;
        $Datos_Empresa->nombre = request('nombre');
        $Datos_Empresa->cif = request('cif');
        $Datos_Empresa->direccion = request('direccion');
        $Datos_Empresa->telefono = request('telefono');
        $Datos_Empresa->poblacion = request('poblacion');
        $Datos_Empresa->email = request('email');
        $Datos_Empresa->password = Hash::make(request('password'));
        $Datos_Empresa->save();
        return redirect('/');
    }
}
