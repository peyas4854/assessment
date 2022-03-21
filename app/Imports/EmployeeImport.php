<?php

namespace App\Imports;

use App\Models\EmployeeAttendance;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use PhpOffice\PhpSpreadsheet\Shared\Date;

class EmployeeImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        $date = $row['date'];
        $date  = \Carbon\Carbon::createFromFormat('d/m/Y', $date)->format('Y-m-d');

        return new EmployeeAttendance([
            'month'         => $row['month'],
            'date'          => $date,
            'day'           => $row['day'],
            'employee_id'   => $row['id'],
            'employee_name' => $row['name'],
            'department'    => $row['department'],
            'first_in_time' => $row['first_in_time'],
            'last_out_time' => $row['last_out_time'],
            'hours_of_work' => $row['hours_of_work'],

        ]);
    }
}
