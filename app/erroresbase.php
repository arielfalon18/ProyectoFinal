<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class erroresbase extends Model
{
    //
    protected $table = 'erroresbase';
    protected $fillable = ['id', 'Motivo','CorreoCliente'];
    public $timestamps = false;
}
