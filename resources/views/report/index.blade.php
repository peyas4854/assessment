@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">


                        <form action="{{route('report')}}" method="get">

                            <div class="form-group">
                                <input type="number" class="form-control" placeholder="Search by id" name="id">
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Submit</button>
                        </form>

                        <a href="{{route('downloadPdf')}}" class="btn btn-primary mt-3">Download PDF</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">Month</th>
                                <th scope="col">Date</th>
                                <th scope="col">Day</th>
                                <th scope="col">Id</th>
                                <th scope="col">Employee Name</th>
                                <th scope="col">Department</th>
                                <th scope="col">First In Time</th>
                                <th scope="col">Last Out Time</th>
                                <th scope="col">Hours of time</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($employees as $employee)
                                <tr>
                                    <th scope="row">{{ $employee->month }}</th>
                                    <th scope="row">{{ \Carbon\Carbon::parse($employee->date)->format('d M, Y') }}</th>
                                    <th scope="row">{{ $employee->day }}</th>
                                    <th scope="row">{{ $employee->employee_id }}</th>
                                    <th scope="row">{{ $employee->employee_name }}</th>
                                    <th scope="row">{{ $employee->department }}</th>
                                    <th scope="row">{{ $employee->first_in_time }}</th>
                                    <th scope="row">{{ $employee->last_out_time }}</th>
                                    <th scope="row">{{ $employee->hours_of_work }}</th>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div>
                        <div class="pagination-wrapper">
                            {{ $employees->links() }}
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
