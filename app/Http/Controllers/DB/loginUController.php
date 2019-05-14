<?php

namespace App\Http\Controllers\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Auth;
use App\login;

class loginUController extends Controller
{
    
    protected $redirectTo='/user';
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
            'email' => 'email|required|string',
            'password' => 'required|string'
        ]);

        if (Auth::guard('usuarioL')->attempt($credentials)) {
           
           if (auth('usuarioL')->user()->rol=='Tecnico') {
            return redirect()->route('tecnico');
            }else if(auth('usuarioL')->user()->rol=='Personal'){
                return redirect()->route('JefePersonal');
            }else{
                return redirect()->route('user');
            }

        }

        return back()
        ->withErrors(['email' => trans('auth.failed')])
        ->withImput(request(['email']));
    }
    public function logout(){
        Auth::guard('usuarioL')->logout();
        return redirect('/');
    }
    public function redirectPath()
    {
        
    }
}
