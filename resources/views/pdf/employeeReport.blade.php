<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>
<body>
<h3 style="text-align: center"> Employee Report </h3>
<table style="width:100%">
    <thead>
    <tr>
        <th>Month</th>
        <th>Date</th>
        <th>Day</th>
        <th>ID</th>
        <th>Employee Name</th>
        <th> Department</th>
        <th> First in Time</th>
        <th> Last out Time</th>
        <th> Hours of work</th>
    </tr>
    </thead>
    <tbody>
    @foreach($employees as $employee)
        <tr>
            <td scope="row">{{ $employee->month }}</td>
            <td scope="row">{{ $employee->date }}</td>
            <td scope="row">{{ $employee->day }}</td>
            <td scope="row">{{ $employee->employee_id }}</td>
            <td scope="row">{{ $employee->employee_name }}</td>
            <td scope="row">{{ $employee->department }}</td>
            <td scope="row">{{ $employee->first_in_time }}</td>
            <td scope="row">{{ $employee->last_out_time }}</td>
            <td scope="row">{{ $employee->hours_of_work }}</td>
        </tr>
    @endforeach
    </tbody>
</table>
</body>
</html>
