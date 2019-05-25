<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class respuestatecnico extends Model
{
    //
    protected $table = 'respuestatecnico';
    protected $fillable = ['id', 'Descripcion', 'Id_incidencia', 'id_tecnico'];
    public $timestamps = false;
}
