<?php

namespace App\Http\Controllers\Auth;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Datos_empresa;

class LoginController extends Controller
{

    public function __construct(){
        $this->middleware('guest' ,['only' => 'showLoginform']);
    }


    public function showLoginform(){
        return view('auth.login');
    }
    public function login(){
        $credentials=$this->validate(request(),[
            'email' => 'email|required|string',
            'password' => 'required|string'
        ]);

        


        if (Auth::attempt($credentials)) {
           return redirect()->route('dashboard');
        }

        return back()
        ->withErrors(['email' => trans('auth.failed')])
        ->withImput(request(['email']));
    }

    public function logout(){
        Auth::logout();

        return redirect('/');
    }

    public function create(){
        return view('auth.create');
    }

    
}
