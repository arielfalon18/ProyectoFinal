<?php

namespace App\Http\Controllers\CSV;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade as PDF;
use App\mostrarhistorialt;
use Excel;
use App\Exports\HistorialExport;
use App\Exports\HistorialExportEmpresa;
class exportController extends Controller
{   
    //Descarga un usuario personal
    public function exportPDF(){
        $historial = mostrarhistorialt::where('idEmpresa',auth('usuarioL')->user()->Id_Empresa)
                                        ->where('IdDepartamento',auth('usuarioL')->user()->Id_Departamento)
                                        ->get();
        $pdf = PDF::loadView('export.pdfHistorial', compact('historial'));
        return $pdf->download('historial-list.pdf');
    }
    //Descarga de una empresa PDF solo vera las incidencia de la empresa da igual que departamento
    public function exportPDFEmpresa(){
        $historialE = mostrarhistorialt::where('idEmpresa',auth()->user()->id)
                                        ->get();
        $pdf = PDF::loadView('export.pdfHistorialEmpresa', compact('historialE'));
        return $pdf->download('historial-list-Empresa.pdf');
    }

    //Descarga excel usuario personal
    public function exportExcel(){
        return Excel::download(new HistorialExport , 'historial-list.xlsx');
    }
    //Descarga excel empresa
    public function exportExcelEmpresa(){
        return Excel::download(new HistorialExportEmpresa , 'historial-list-Empresa.xlsx');
    }
}
