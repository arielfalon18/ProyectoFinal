<?php

namespace App\Http\Controllers\CSV;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Barryvdh\DomPDF\Facade as PDF;
use App\historial;
use Excel;
use App\Exports\HistorialExport;
class exportController extends Controller
{
    public function exportPDF(){
        $historial = historial::get();
        $pdf = PDF::loadView('export.pdfHistorial', compact('historial'));
        return $pdf->download('historial-list.pdf');
    }
    public function exportExcel(){
        return Excel::download(new HistorialExport , 'historial-list.xlsx');
    }
}
