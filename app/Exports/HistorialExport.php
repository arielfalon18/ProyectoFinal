<?php

namespace App\Exports;

use App\historial;
use Maatwebsite\Excel\Concerns\FromCollection;

class HistorialExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        //Usar la variable select para que puedas exportar mejor que todo 
        return historial::with('incidenciaId')->select('id','id_Incidencia')->get();
//         select ins.id,ins.Descripcion, empl.nombre, tec.nombre as tecnicoN, resp.Descripcion
// from incidencia ins, empleados empl,respuestatecnico resp,historial his 
// INNER join empleados tec ON his.id_Usuario=tec.id
// WHERE ins.id=his.id_Incidencia and empl.id=ins.Id_Empleado_usuario and resp.id_tecnico=his.id_Usuario
    }
}
