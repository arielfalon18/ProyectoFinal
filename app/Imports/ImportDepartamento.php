<?php

namespace App\Imports;

use App\Departamento;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportDepartamento implements ToModel , WithHeadingRow
{
    
    public function model(array $row)
    {
        
        return new Departamento([
            //
            'Nombre'     => $row['nombre'],
            'Planta'    => $row['planta'],
            'Edificio' => $row['edificio'],
            'IdEmpresa' =>auth()->user()->id
        ]);
    }
}
