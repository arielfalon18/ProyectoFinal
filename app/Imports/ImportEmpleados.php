<?php

namespace App\Imports;

use App\Empleados;
use App\login;
use App\Departamento;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportEmpleados implements ToModel , WithHeadingRow
{
    
    public function model(array $row)
    {
        $departamento=Departamento::where('Nombre',$row['departamento'])->get();
        foreach ($departamento as $depart) {
            $empleados=Empleados::create([
                //
                'nombre'    => $row['nombre'],
                'dni'    => $row['dni'],
                'email'  => $row['email'],
                'telefono'  => $row['telefono'],
                'IdEmpresa' =>auth()->user()->id,
                'IdDepartamento'=>$depart->id,
                'Rol'=> $row['rol'],
                'Foto'=>'null'
            ]);
        }
        
        $empleados->save();
        $login=login::create([
            'email'    => $row['email'],
            'password'    => Hash::make('12345'),
            'rol'  => $row['rol'],
            'Id_empleado'  => $empleados->id,
            'Id_Empresa' =>auth()->user()->id,
            'Id_Departamento'=>$empleados->IdDepartamento,
        ]);
        $login->save();
    }
}
