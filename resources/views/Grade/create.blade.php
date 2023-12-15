@extends('home')

@section('content')

    <h1>Add New Grade</h1>
    <div class="row">   
        <div class="col-md-5">
            <form action="{{ url('grade/create') }}" method="POST">
                @csrf
                <div class="form-group mt-2">
                    <label for="enrollment_id">Enrollment ID</label>
                    <input type="text" name="enrollment_id" class="form-control">
                </div>
                <div class="form-group mt-2">
                    <label for="grade">Grade</label>
                    <input type="text" name="grade" class="form-control">
                </div>
                <div class="form-group mt-2">
                    <label for="exam_date">Exam Date</label>
                    <input type="text" name="exam_date" class="form-control">
                </div>
                <div class="form-group my-3 d-grid gap-2 d-md-flex justify-content-end">
                    <button class="btn btn-primary">Add Grades</button>
                </div>
            </form>
        </div>
    </div>
@endsection
