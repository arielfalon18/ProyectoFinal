<?php

namespace App\Http\Controllers\DB;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Rol;
class RolController extends Controller
{
    //
    public function GetRol(){
        $Rol=Rol::get();
        return $Rol;
    }
}
