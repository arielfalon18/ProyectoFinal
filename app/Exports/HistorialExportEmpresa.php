<?php

namespace App\Exports;

use App\mostrarhistorialt;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

class HistorialExportEmpresa implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function view(): View
    {
        return view('export.export-calc-Empresa', [
            'mostrarHistorialEMpresa' => mostrarhistorialt::where('idEmpresa',auth()->user()->id)
                                        ->get()
        ]);
    }
}
