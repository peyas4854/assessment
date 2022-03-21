<?php

namespace App\Http\Controllers;


use App\Models\EmployeeAttendance;
use PDF;
use Illuminate\Http\Request;


class EmployeeReportController extends Controller
{
    public function index(Request $request)
    {

        $employees = EmployeeAttendance::query();
        if ($request->id) {
            $employees = EmployeeAttendance::where('employee_id', $request->id);
        }

        $employees=  $employees->paginate(10);
        return view('report.index', compact('employees'));

    }
    public  function downloadPdf(){

        $employees = EmployeeAttendance::query()->select('id','month','date','day','employee_id','employee_name','department','first_in_time','last_out_time','hours_of_work')->get();

        $pdf = PDF::loadView('pdf.employeeReport', compact('employees'));

        return $pdf->download('EmployeeReport.pdf');
    }
}
