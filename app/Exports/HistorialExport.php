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
        return historial::all();
    }
}
