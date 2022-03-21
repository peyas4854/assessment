@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card bg-light mt-3">
            <div class="card-header">
                File upload
            </div>
            <div class="card-body">
                <form action="{{ route('import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="file" class="form-control">
                    <br>
                    <button class="btn btn-success">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
