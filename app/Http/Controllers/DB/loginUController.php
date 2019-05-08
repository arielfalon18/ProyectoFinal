<?php

namespace App\Http\Controllers\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Auth;
use App\login;

class loginUController extends Controller
{
    
    
    protected $loginView='';
    protected $guard ='usuarioL';
    public function __construct(){
        $this->middleware('guest' ,['only' => 'showLoginform']);
    }
    public function showLoginform(){
        return view('vistas.FormularioLogin');
    }
    
    public function login(){
        $credentials=$this->validate(request(),[
            'usuarioLogin' => 'email|required|string',
            'paswordLogin' => 'required|string'
        ]);

        if (Auth::guard('usuarioL')->attempt($credentials)) {
           return redirect()->route('user.user');
        }

        return back()
        ->withErrors(['usuarioLogin' => trans('auth.failed')])
        ->withImput(request(['usuarioLogin']));
    }
}
