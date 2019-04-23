<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class inicio extends Controller
{
    public function getIndex(){
        // $libros = DB::table('libros')->get('title');
        
        return view('inicio');
        
    }

}
