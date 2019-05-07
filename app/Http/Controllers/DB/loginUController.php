<?php

namespace App\Http\Controllers\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use \Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use App\login;

class loginUController extends Controller
{
    
    use AuthenticatesUsers;
    protected $loginView='';
    protected $guard ='usuarioL';
    public function authenticated(){
        return redirect('user.user');
    }
}
