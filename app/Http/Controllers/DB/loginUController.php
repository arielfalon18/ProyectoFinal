<?php

namespace App\Http\Controllers\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use AuthL;

class loginUController extends Controller
{
    // public function __construct(){
    //     $this->middleware('guest' ,['only' => 'showLoginform']);
    // }
    public function loginEmpleado(){
        $credentials=$this->validate(request(),[
            'loginN' => 'email|required|string',
            'passwordN' => 'required|string'
        ]);


        if (AuthL::attempt($credentials)) {
           return redirect()->route('user.user');
        }

        return back()
        ->withErrors(['usuarioLogin' => trans('auth.failed')])
        ->withImput(request(['usuarioLogin']));
    }
}
