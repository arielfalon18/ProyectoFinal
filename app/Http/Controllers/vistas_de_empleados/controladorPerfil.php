<?php

namespace App\Http\Controllers\vistas_de_empleados;

use Illuminate\Http\Request;
use App\Empleados;
use App\login;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;

class controladorPerfil extends Controller
{
    //
    public function actualizarPerfil (Request $resquest){
        $loginPassword=login::where('Id_empleado',$resquest['idempleado'])->get();
        foreach ($loginPassword as $loginP) {
            $login=login::find($loginP->id);
            $login->password=Hash::make($resquest['passwordNew']);
            $login->save();
        }
    }
}
