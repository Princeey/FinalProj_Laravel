@extends('home')

@section('content')

    <h1>Add New Student</h1>
    <div class="row">   
        <div class="col-md-5">
            <form action="{{ url('student/create') }}" method="POST">
                @csrf
                <div class="form-group mt-2">
                    <label for="student_name">Name</label>
                    <input type="text" name="student_name" class="form-control">
                </div>
                <div class="form-group mt-2">
                    <label for="student_address">Address</label>
                    <input type="text" name="student_address" class="form-control">
                </div>
                <div class="form-group mt-2">
                    <label for="student_email">Email</label>
                    <input type="text" name="student_email" class="form-control">
                </div>
                <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                    <button class="btn btn-primary">Add Student</button>
                </div>
            </form>
        </div>
    </div>
@endsection
