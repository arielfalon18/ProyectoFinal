<?php

namespace App;
use App\Incidencia;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
class Departamento extends Model
{
    use Sortable;
    protected $table = 'departamento';
    protected $fillable = ['id', 'Nombre','Planta', 'Edificio','IdEmpresa'];
    public $timestamps = false;
    public $sortable = ['id', 'Nombre','Planta', 'Edificio','IdEmpresa'];


    //relacion con incidencia
    // public function incidenias(){
    //     return $this->belongsToMany('App\Incidencia');
    // }
    public static function NuevoD(){
        return self::get();

    }
}
