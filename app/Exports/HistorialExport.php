<?php

namespace App\Exports;

use App\mostrarhistorialt;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class HistorialExport implements FromView
{
    public function view(): View
    {
        return view('export.export-calc', [
            'mostrarHistorial' => mostrarhistorialt::where('idEmpresa',auth('usuarioL')->user()->Id_Empresa)
                                        ->where('IdDepartamento',auth('usuarioL')->user()->Id_Departamento)
                                        ->get()
        ]);
    }
}
