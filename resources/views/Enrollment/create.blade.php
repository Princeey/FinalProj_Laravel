@extends('home')

@section('content')

    <h1>Add New Enrollment</h1>
    <div class="row">   
        <div class="col-md-5">
            <form action="{{ url('enrollment/create') }}" method="POST">
                @csrf
                <div class="form-group mt-2">
                    <label for="student_id">Student ID</label>
                    <input type="text" name="student_id" class="form-control">
                </div>
                <div class="form-group mt-2">
                    <label for="course_id">Coures ID</label>
                    <input type="text" name="course_id" class="form-control">
                </div>
                <div class="form-group mt-2">
                    <label for="enrollment_date">Enrollment Date</label>
                    <input type="text" name="enrollment_date" class="form-control">
                </div>
                <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                    <button class="btn btn-primary">Add Enrollment</button>
                </div>
            </form>
        </div>
    </div>
@endsection
