<?php

namespace App\Http\Controllers;

use App\Imports\EmployeeImport;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class EmployeeAttendanceController extends Controller
{
    public function import()
    {
        Excel::import(new EmployeeImport(), request()->file('file'));
        return 'done';
    }


}
