<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tecnicos extends Model
{
    //
    protected $table = 'tecnico';
    protected $fillable = ['id', 'UsuarioLogin','Password'];
    public $timestamps = false;
}
