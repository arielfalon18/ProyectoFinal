<?php

namespace App\Http\Controllers\CSV;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Imports\ImportDepartamento;
use App\Imports\ImportEmpleados;
use Maatwebsite\Excel\Facades\Excel;

class importController extends Controller
{
    //
    public function ImportFicheroInsert(Request $request){
        Excel::import(new ImportDepartamento, request()->file('csv_file'));    
        return redirect('dashboard');
    }
    public function importCSVEmpleados(Request $request){
        Excel::import(new ImportEmpleados, request()->file('csv_fileE'));    
        return redirect('dashboard');
    }
}
