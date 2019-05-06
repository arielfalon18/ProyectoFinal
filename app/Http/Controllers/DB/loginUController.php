<?php

namespace App\Http\Controllers\DB;
use App\login;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use \Illuminate\Support\Facades\Validator;
use \Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class loginUController extends Controller
{
    // public function __construct(){
    //     $this->middleware('guest' ,['only' => 'showLoginform']);
    // }
    use AuthenticatesUsers;
    protected $loginView='';
    protected $guard ='usuarioL';
    public function loginEmpleado(){
        


    }
}
