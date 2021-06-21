<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



use Maatwebsite\Excel\Facades\Excel;
use App\Exports\PizzaExport;
use App\Imports\PizzaImport;

class ImportExportController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function importExport()
    {
       return view('importexport');
    }
   
    public function importFile(Request $request) 
    {
        Excel::import(new PizzaImport, $request->file('file')->store('temp'));
        return  redirect()->back()->with('message', 'Product Imported');
    }

    public function exportFile() 
    {
        return Excel::download(new PizzaExport, 'pizza-list.xlsx');
    }  
}