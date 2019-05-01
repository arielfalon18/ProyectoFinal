<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    //
    protected $table = 'usuario';
    protected $fillable = ['id', 'UsuarioLogin','Password'];
    public $timestamps = false;
}
