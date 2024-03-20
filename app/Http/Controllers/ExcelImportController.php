<?php

namespace App\Http\Controllers;

use App\Imports\EmployeeImport;
use Illuminate\Http\Request;
use Excel;

class ExcelImportController extends Controller
{
    public function createEmployee(){
        return view('imports.create_employee');
    }
    public function importEmployee(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'file' => 'required|mimes:xlsx,xls',
        ]);
 
        // Get the uploaded file
        $file = $request->file('file');
 
        // Process the Excel file
        Excel::import(new EmployeeImport, $file);
 
        return redirect()->back()->with('success', 'Excel file imported successfully!');
    }
}
