<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\User;

class ConsultasController extends Controller
{
    public function nuevoR()
    {
        
        $usuario = new User;
        $usuario->name = request('name');
        $usuario->email = request('correr');
        $usuario->password = Hash::make(request('password'));
        $usuario->save();
        return redirect('/');
    }
}
