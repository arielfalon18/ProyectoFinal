<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class historial extends Model
{
    //
    protected $table = 'historial';
    protected $fillable = ['id', 'id_incidencia','id_Usuario'];
    public $timestamps = false;
}
